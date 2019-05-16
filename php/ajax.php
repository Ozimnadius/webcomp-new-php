<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/SMTP.php';

//use dps\workday\Workday;

//require $_SERVER['DOCUMENT_ROOT'] . '/php/Workday.php';


$data = $_POST;
$action = $data['action'];

switch ($action) {
    case 'autocomplete':
        echo json_encode(array(
            'status' => true,
            'data' => array('Web-продвижение', 'Web-аналитика', 'Web-продвижение')
        ));
        exit();
        break;
    case 'callorderForm':
        echo json_encode(array(
            'status' => true,
            'html' => callorderForm()
        ));
        exit();
        break;
    case 'callorderDataSend':
        $arr = getCallorderMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'])
        ));
        exit();
        break;
    case 'timerForm':
        $arr = getTimer();
        echo json_encode(array(
            'status' => true,
            'endTime' => $arr['date'],
            'html' => $arr['html'],
            'timerOff' => $arr['timerOff']
        ));
        exit();
        break;
    case 'tarifForm':
        echo json_encode(array(
            'status' => true,
            'html' => tarifForm($data['id'], $data['name'], $data['src'])
        ));
        exit();
        break;
    case 'pushForm':
        echo json_encode(array(
            'status' => true,
            'html' => pushForm($data['seo'])
        ));
        exit();
        break;
    case 'promotionForm':
        echo json_encode(array(
            'status' => true,
            'html' => promotionForm()
        ));
        exit();
        break;
    case 'testForm':
        echo json_encode(array(
            'status' => true,
            'html' => testForm()
        ));
        exit();
        break;
    case 'calcSend':
        $arr = getCalcMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'])
        ));
        exit();
        break;
    case 'siteCostSend':
        $arr = getSiteCostMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'], $arr['file'])
        ));
        exit();
        break;
    case 'calcCostSend':
        $arr = getCalcCostMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'])
        ));
        exit();
        break;
    case 'tarifMail':
        $arr = getTarifMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'])
        ));
        exit();
        break;
    case 'bannerSendMail':
        $arr = getBannerSendMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'])
        ));
        exit();
        break;
    case 'promotionMail':
        $arr = getPromotionMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'])
        ));
        exit();
        break;
    case 'smmMail':
        $arr = getSmmMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'])
        ));
        exit();
        break;
    case 'testingMail':
        $arr = getTestingMail();
        echo json_encode(array(
            'status' => mailTo($arr['addrs'], $arr['subject'], $arr['html'])
        ));
        exit();
        break;

    default:
        echo json_encode(array(
            'status' => false,
        ));
        exit();
        break;
}

function autocomplete()
{
    ob_start();
    ?>

    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function callorderForm()
{
    $html = file_get_contents('./popup/callorder/form_' . $_POST['formId'] . '.php');
    return $html;
}

function timerForm($id)
{
    $html = file_get_contents('./popup/timer/form_' . $id . '.php');
    return $html;
}

function getTimer()
{
    $arr = [
        'html' => '',
        'date' => '',
        'timerOff' => false
    ];

    $stamp = mktime();
    $curDate = date('Y-m-d');
    $curTime = date('H:i:s');
    $curH = date('H');
    $timerDate = '';

//    $stamp = mktime(18, 10, 20, 2, 26, 2019);
//    $curDate = date('Y-m-d', $stamp);
//    $curTime = date('H:i:s', $stamp);
//    $curH = date('H', $stamp);


    if (isWorkDay($curDate)) {
        if (isWorkTime($curH)) {
            $timerDate = date('F d Y H:i:s', $stamp + 60 * 60);
        } else {
            if ($curH >= 18) {
                $timerDate = findNextWorkDay($stamp);
            } else {
                $timerDate = getDateTimeFrom($stamp);
            }
        }
    } else {
        $timerDate = findNextWorkDay($stamp);
        echo $timerDate;
    }

    $arr['date'] = $timerDate;

    $stampTo = strtotime($arr['date']);
    $diffH = ($stampTo - $stamp) / (60 * 60);
    $id = 1;
    if ($diffH >= 16) {
        $id = 2;
        $arr['timerOff'] = true;
    }

    $arr['html'] = timerForm($id);

    return $arr;

}

function isWorkDay($curDate)
{
    $url = 'https://datazen.katren.ru/calendar/day/' . $curDate . '/';
    $result = json_decode(file_get_contents($url));
    $holiday = $result->holiday;

    return !$holiday;
}

function isWorkTime($curH)
{
    $workHFrom = '9';
    $workHTo = '18';
    if ($curH < $workHFrom || $curH >= $workHTo) {
        return false;
    } else {
        return true;
    }
}

function getDateTimeFrom($stamp)
{
    $year = date('Y', $stamp);
    $month = date('m', $stamp);
    $day = date('d', $stamp);
    $hour = '9';
    $min = '0';
    $sec = '0';
    return date('F d Y H:i:s', mktime($hour, $min, $sec, $month, $day, $year));
}

function findNextWorkDay($stamp)
{
    $stamp += 60 * 60 * 24;
    $thisDate = $curDate = date('Y-m-d', $stamp);

    if (isWorkDay($thisDate)) {
        $date = getDateTimeFrom($stamp);
        return $date;
    } else {
        return findNextWorkDay($stamp);
    }
}

function tarifForm($id, $name, $src)
{

    $tarrifs = [
        'XS' => [
            'ssd' => '1 Гб',
            'domen' => '1 домен',
            'sql' => 'Неограничено',
            'visitors' => 'Неограничено',
            'price' => '190 Р'
        ],
        'S' => [
            'ssd' => '2 Гб',
            'domen' => '1 домен',
            'sql' => 'Неограничено',
            'visitors' => 'Неограничено',
            'price' => '240 Р'
        ],
        'M' => [
            'ssd' => '5 Гб',
            'domen' => '3 домена',
            'sql' => 'Неограничено',
            'visitors' => 'Неограничено',
            'price' => '350 Р'
        ],
        'L' => [
            'ssd' => '10 Гб',
            'domen' => '5 доменов',
            'sql' => 'Неограничено',
            'visitors' => 'Неограничено',
            'price' => '690 Р'
        ],
        'XL' => [
            'ssd' => '30 Гб',
            'domen' => '7 доменов',
            'sql' => 'Неограничено',
            'visitors' => 'Неограничено',
            'price' => '1990 Р'
        ]
    ];

    ob_start();
    ?>
    <form action="#" method="post" class="hosting form">
        <div class="hosting__planet host-tarifs__item_<?= $id ?>">
            <div class="host-tarifs__img" style="height: 100px">
                <div class="host-tarifs__img-img"
                     style="background-image:url(<?= $src ?>); width: 100px; height: 100px;  box-shadow: inset 16px 0 40px 3px rgba(0, 0, 0, 0.9), inset -3px 0 5px 2px rgba(255, 255, 255, 0.16), 0px 0px 4px 2px rgba(120, 159, 187, 0.5);"></div>
            </div>
            <div class="host-tarifs__tag">
                <div class="host-tarifs__title">Тариф <span class="host-tarifs__title_y">«<?= $name ?>»</span></div>
            </div>
            <input type="hidden" name="tarif" value="<?= $name ?>">
        </div>
        <div class="hosting__content">
            <table>
                <thead>
                <tr>
                    <th>Место на SSD диске</th>
                    <th>Количество доменов</th>
                    <th>Базы MySQL</th>
                    <th>Посетителей сайта</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <?= $tarrifs[$name]['ssd'] ?>
                        <input type="hidden" name="ssd" value="<?= $tarrifs[$name]['ssd'] ?>">
                    </td>
                    <td>
                        <?= $tarrifs[$name]['domen'] ?>
                        <input type="hidden" name="domen" value="<?= $tarrifs[$name]['domen'] ?>">
                    </td>
                    <td>
                        <?= $tarrifs[$name]['sql'] ?>
                        <input type="hidden" name="sql" value="<?= $tarrifs[$name]['sql'] ?>">
                    </td>
                    <td>
                        <?= $tarrifs[$name]['visitors'] ?>
                        <input type="hidden" name="visitors" value="<?= $tarrifs[$name]['visitors'] ?>">
                    </td>
                    <td>
                        <?= $tarrifs[$name]['price'] ?>
                        <input type="hidden" name="price" value="<?= $tarrifs[$name]['price'] ?>">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="hosting__bottom">
            <div class="form__row">
                <div class="form__field">
                    <input class="input" type="text" name="name" placeholder="Имя">
                </div>
                <div class="form__field">
                    <input class="input" type="tel" name="tel" placeholder="Телефон">
                </div>
                <div class="form__field">
                    <input class="input" type="email" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class="form__submit">
                <button type="submit" class="hosting__button">
                    <div class="btn">
                        <div class="btn__title">заказать</div>
                        <div class="btn__lines">
                            <div class="btn__line-top"></div>
                            <div class="btn__line-right"></div>
                            <div class="btn__line-bottom"></div>
                            <div class="btn__line-left"></div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <input type="hidden" name="action" value="tarifMail">
    </form>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function pushForm($name)
{
    ob_start();
    ?>
    <div class="push">
        <form action="#" method="post" class="push__form">
            <div class="push__title">
                Мы эффективно продвинули
            </div>
            <div class="push__subtitle">
                более 450 сайтов по разным тематикам. Если вы хотите:
            </div>
            <div class="push__list">
                <div class="push__item">Выявить слабые стороны своего проекта</div>
                <div class="push__item">Увеличить свою клиентскую базу</div>
                <div class="push__item">Продавать товары и услуги в целевой аудитории</div>
                <div class="push__item">Увеличить узнаваемость бренда в соц.сетях</div>
                <div class="push__item">Привлечь клиентов с оплатой за переход</div>
            </div>
            <button type="button" class="push__button callorderOpen" data-formId="2">
                <div class="btn">
                    <div class="btn__title">рассчитать стоимость</div>
                    <div class="btn__lines">
                        <div class="btn__line-top"></div>
                        <div class="btn__line-right"></div>
                        <div class="btn__line-bottom"></div>
                        <div class="btn__line-left"></div>
                    </div>
                </div>
            </button>

        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function promotionForm()
{
    ob_start();
    ?>
    <div class="promotion">
        <form class="promotion__form form" action="#" method="post">
            <div class="promotion__subtitle">
                Заполните бриф-онлайн для расчета точной стоимости продвижения сайта
            </div>
            <div class="form__row">
                <div class="form__field">
                    <input class="input" type="text" name="name" placeholder="Имя">
                </div>
                <div class="form__field">
                    <input class="input" type="tel" name="tel" placeholder="Телефон">
                </div>
                <div class="form__field">
                    <input class="input" type="email" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class="form__row">
                <div class="form__field">
                    <input class="input" type="text" name="site" placeholder="Название сайта">
                </div>
                <div class="form__field">
                    <input class="input" type="text" name="region" placeholder="Регион продвижения">
                </div>
                <div class="form__field">
                    <input class="input" type="text" name="businessArea" placeholder="Сфера деятельности">
                </div>
            </div>
            <div class="form__row">
                <div class="form__field form__field_3">
                    <textarea name="description" class="input input_area"
                              placeholder="Перечислите основные направления для подбора запросов. Пример: Установка пластиковых окон, продажа земельных участков, услуги частного психотерапевта"></textarea>
                </div>
            </div>
            <button class="form__submit promotion__submit" type="submit">
                <div class="btn">
                    <div class="btn__title">Получить консультацию маркетолога</div>
                    <div class="btn__lines">
                        <div class="btn__line-top"></div>
                        <div class="btn__line-right"></div>
                        <div class="btn__line-bottom"></div>
                        <div class="btn__line-left"></div>
                    </div>
                </div>
            </button>
            <input type="hidden" name="action" value="promotionMail">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function testForm()
{
    $answers = [
        'factors' => 'Количество уникальных посетителей',
        'openRate' => 'Какой процент людей открыл письмо',
        'googleAdwords' => 'Все вышеперечисленное',
        'leadGeneration' => 'Call to action',
        'twitterGif' => 'Да',
        'advYoutube' => 'Статичная',
        'ctr' => '40',
        'robots' => 'Все вышеперечисленное',
        'sef' => 'ЧеловекоПонятный URL',
        'formatSeo' => 'RDFA',
//        'speedLoad' => 'Длина url страницы',
//        'priceGoogle' => 'Оба варианта',
//        'bestAdv' => 'Первое',
//        'landingConversion' => 'Средней конверсии не существует',
//        'blackSeo' => 'Изменение даты публикации материала',
//        'altText' => '.gif',
//        '1000Page' => 'Все вышеперечисленное',
//        'dataMarkup' => 'Все вышеперечисленное',
//        'banGoogle' => 'Все вышеперечисленное',
//        'filterAgc' => 'Отсутствие добавочной ценности в контенте сайта'
    ];
    $correct = 0;
    $wrong = 0;
    $totalQuestions = count($answers);


    foreach ($answers as $key => $answer) {
        if ($_POST[$key] == $answer) {
            $correct++;
        } else {
            $wrong++;
        }
    }


    ob_start();
    ?>
    <form action="#" method="post" class="testing__form2">
        <div class="testing__slide-title">
            Результаты теста <?= $correct ?> из <?= $totalQuestions ?> верных ответов.
        </div>
        <div class="testing__fields">
            <div class="testing__row">
                <div class="testing__field">
                    <label class="testing__label">
                        Введите свою почту и мы отправим Вам промо-код и правильные ответы на почту.
                        <input type="email" name="email" class="input">
                    </label>
                </div>
            </div>
        </div>
        <div class="testing__buttons">
            <button class="testing__submit" type="submit">
                <div class="btn">
                    <div class="btn__title">Отправить</div>
                    <div class="btn__lines">
                        <div class="btn__line-top"></div>
                        <div class="btn__line-right"></div>
                        <div class="btn__line-bottom"></div>
                        <div class="btn__line-left"></div>
                    </div>
                </div>
            </button>
        </div>
        <input type="hidden" name="valid" value="<?= $correct ?>">
        <input type="hidden" name="total" value="<?= $totalQuestions ?>">
        <input type="hidden" name="action" value="testingMail">
    </form>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getCallorderMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => ''
    ];

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Заказ звонка';
    if(isset($_POST['theme']) && !empty($_POST['theme'])){
        $arr['subject'] = $_POST['theme'];
    }


    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Имя: <?= $_POST['name'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Телефон: <?= $_POST['tel'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Email: <?= $_POST['email'] ?>
            </td>
        </tr>
        <? if (isset($_POST['description'])): ?>
            <tr>
                <td>
                    Описание: <?= $_POST['description'] ?>
                </td>
            </tr>
        <? endif; ?>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function getCalcMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => ''
    ];

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Калькулятор расчета стоимости';

    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Вид проекта: <?= $_POST['type'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Требуется:
                <? foreach ($_POST['needs'] as $need): ?>
                    <?= $need . ',' ?>
                <? endforeach; ?>
            </td>
        </tr>
        <tr>
            <td>
                Количество страниц: <?= $_POST['pages'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Количество товаров: <?= $_POST['products'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Доп. баннеры: <?= $_POST['words'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Обработка изображений: <?= $_POST['photos'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Срочность: <?= $_POST['range'] ?> месяцев
            </td>
        </tr>
        <? if (isset($_POST['style'])): ?>
            <tr>
                <td>
                    Есть фирменный стиль
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['domen'])): ?>
            <tr>
                <td>
                    Нужно подобрать домен
                </td>
            </tr>
        <? endif; ?>
        <tr>
            <td>
                Имя: <?= $_POST['name'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Телефон: <?= $_POST['tel'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Email: <?= $_POST['email'] ?>
            </td>
        </tr>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function getSiteCostMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => '',
        'file' => []
    ];

    if (isset($_FILES) && !empty($_FILES)) {
        $arrFile = $_FILES['file'];
        $arr['file']['src'] = $arrFile['tmp_name'];
        $arr['file']['name'] = $arrFile['name'];

    }

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Сколько стоит ваш сайт';

    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Имя: <?= $_POST['name'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Телефон: <?= $_POST['tel'] ?>
            </td>
        </tr>
        <? if (isset($_POST['company'])): ?>
            <tr>
                <td>
                    Название компании: <?= $_POST['company'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['companyStyle'])): ?>
            <tr>
                <td>
                    Наличие фирменного стиля: <?= $_POST['companyStyle'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['specification'])): ?>
            <tr>
                <td>
                    Наличие тех. задания: <?= $_POST['specification'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['siteType'])): ?>
            <tr>
                <td>
                    Тип сайта: <?= $_POST['siteType'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['endTime'])): ?>
            <tr>
                <td>
                    Время на разработку: <?= $_POST['endTime'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['buisinessArea'])): ?>
            <tr>
                <td>
                    Вид деятельности: <?= $_POST['buisinessArea'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['dopInfo1'])): ?>
            <tr>
                <td>
                    Дополнительная информация 1: <?= $_POST['dopInfo1'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['adaptive'])): ?>
            <tr>
                <td>
                    Адаптивная версия: <?= $_POST['adaptive'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['crm'])): ?>
            <tr>
                <td>
                    Интеграция с CRM: <?= $_POST['crm'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['warehouse'])): ?>
            <tr>
                <td>
                    Интеграция со складом: <?= $_POST['warehouse'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['socialsApp'])): ?>
            <tr>
                <td>
                    Подключение социальных сервисов: <?= $_POST['warehouse'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['payApp'])): ?>
            <tr>
                <td>
                    Подключение платежных сервисов: <?= $_POST['payApp'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['deliveryApp'])): ?>
            <tr>
                <td>
                    Интеграция со службами доставки: <?= $_POST['deliveryApp'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['deliveryApp'])): ?>
            <tr>
                <td>
                    Синхронизация с доп источниками: <?= $_POST['dopApp'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['complexFilters'])): ?>
            <tr>
                <td>
                    Подключение сложных фильтров: <?= $_POST['complexFilters'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['calcs'])): ?>
            <tr>
                <td>
                    Разработка калькуляторов: <?= $_POST['calcs'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['dopInfo2'])): ?>
            <tr>
                <td>
                    Дополнительные пожелания по функционалу: <?= $_POST['dopInfo2'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['logo'])): ?>
            <tr>
                <td>
                    Разработка логотипа: <?= $_POST['logo'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['pages'])): ?>
            <tr>
                <td>
                    Сколько страниц нарисовать: <?= $_POST['pages'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['dopDesign'])): ?>
            <tr>
                <td>
                    Дизайн доп. материалов к сайту: <?= $_POST['dopDesign'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['siteStyle'])): ?>
            <tr>
                <td>
                    Стиль сайта: <?= $_POST['siteStyle'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['siteInfographics'])): ?>
            <tr>
                <td>
                    Инфографика для сайта: <?= $_POST['siteInfographics'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['siteFont'])): ?>
            <tr>
                <td>
                    Шрифт для сайта: <?= $_POST['siteFont'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['dopInfo3'])): ?>
            <tr>
                <td>
                    Уточнения и пожелания: <?= $_POST['dopInfo3'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['goodSites'])): ?>
            <tr>
                <td>
                    Сайты, которые вам нравятся: <?= $_POST['dopInfo3'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['badSites'])): ?>
            <tr>
                <td>
                    Сайты, которые вам не нравятся: <?= $_POST['badSites'] ?>
                </td>
            </tr>
        <? endif; ?>
        <? if (isset($_POST['dopInfo4'])): ?>
            <tr>
                <td>
                    Дополнительные пожелания: <?= $_POST['dopInfo4'] ?>
                </td>
            </tr>
        <? endif; ?>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function getCalcCostMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => ''
    ];

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Сколько стоит продвижение вашего сайта';

    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Имя: <?= $_POST['name'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Телефон: <?= $_POST['tel'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Способ продвижения:
                <? foreach ($_POST['promo'] as $promo): ?>
                    <?= $promo . ',' ?>
                <? endforeach; ?>
            </td>
        </tr>
        <tr>
            <td>
                Количество продвигаемых слов: <?= $_POST['words'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Регион продвижения: <?= $_POST['region'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Ваша тематика: <?= $_POST['thematics'] ?>
            </td>
        </tr>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function getTarifMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => ''
    ];

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Заказ тарифа ' . $_POST['tarif'];

    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Имя: <?= $_POST['name'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Телефон: <?= $_POST['tel'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Email: <?= $_POST['email'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Тариф: <?= $_POST['tarif'] ?>
            </td>
        </tr>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function getPromotionMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => ''
    ];

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Бриф для расчета точной стоимости';

    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Имя: <?= $_POST['name'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Телефон: <?= $_POST['tel'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Email: <?= $_POST['email'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Название сайта: <?= $_POST['site'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Регион продвижения: <?= $_POST['region'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Сфера деятельности: <?= $_POST['businessArea'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Описание: <?= $_POST['description'] ?>
            </td>
        </tr>

    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function getBannerSendMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => ''
    ];

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Хотите сайт в топ?';

    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Email: <?= $_POST['email'] ?>
            </td>
        </tr>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function getSmmMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => ''
    ];

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Расчет стоимости продвижения';

    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Имя: <?= $_POST['name'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Телефон: <?= $_POST['tel'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Email: <?= $_POST['email'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Адрес сайта: <?= $_POST['addr'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Бюджет в месяц: <?= $_POST['budget'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Сфера деятельности: <?= $_POST['sphere'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Срок реализации: <?= $_POST['term'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Сойсети: <?= $_POST['smm'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Какие услуги вам интересны: <?= $_POST['services'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Комментарий: <?= $_POST['desc'] ?>
            </td>
        </tr>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function getTestingMail()
{
    $arr = [
        'addrs' => [],
        'subject' => '',
        'html' => ''
    ];

    $arr['addrs'][] = 'info@web-comp.ru';
    $arr['addrs'][] = 'vg@web-comp.ru';
    $arr['subject'] = 'Результаты тестирования';

    ob_start();
    ?>
    <h3><?= $arr['subject'] ?></h3>
    <table>
        <tr>
            <td>
                Email: <?= $_POST['email'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Правильных ответов: <?= $_POST['valid'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Всего вопросов: <?= $_POST['total'] ?>
            </td>
        </tr>
    </table>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    $arr['html'] = $html;

    return $arr;
}

function mailTo($addrs, $subject, $html, $file = [])
{
    $mail = new PHPMailer(true);
    $mail->CharSet = $mail::CHARSET_UTF8;
    try {
        //Recipients
        $mail->setFrom('info@web-comp.ru', 'Web-Comp');
        foreach ($addrs as $addr) {
            $mail->addAddress($addr, 'Joe User');
        }

        //Attachments
        if (!empty($file)) {
            $mail->addAttachment($file['src'], $file['name']);
        }

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $html;

        $result = $mail->send();
        return $result;
    } catch (Exception $e) {
        die(print_r($e));
        return false;
    }
}
