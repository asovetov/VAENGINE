<?php
	// NavBar options
	define ('ABOUT' , 'О нас ');
	define ('PILOTS' , 'Наши пилоты');
	define ('FLEET' , 'Флот');
	define ('ROUTES' , 'Маршруты');
	define ('STAFF' , 'Персонал');
	define ('RULES' , 'Правила');
	define ('SCHOOL' , 'Школа');
	define ('REGISTER' , 'Регистрация');
	define ('FORUM' , 'Форум');
	define ('LANGUAGES' , 'Язык');
	define ('LANGUAGE_ES' , 'Español');
	define ('LANGUAGE_EN' , 'English');
	define ('LANGUAGE_CS' , 'Čeština');
	define ('LANGUAGE_FR' , 'Français');
	define ('LANGUAGE_RU' , 'Русский');
	// NavBar options user logged
	define ('MENU' , 'Пилоту');
	define ('STATS' , 'Статистика');
	define ('ADMIN' , 'Админу');
	// Pilot Roster
	define ('PILOT_ROSTER' , 'PILOT ROSTER');
	define ('CALLSIGN' , 'Позывной');
	define ('NAME' , 'Имя');
	define ('HUB' , 'Хаб');
	define ('LOCATION' , 'Локация');
	define ('HOURS' , 'Часы');
	define ('RANK' , 'Ранг');
	define ('COUNTRY' , 'Страна');
	define ('STATUS' , 'Статус');
	define ('IVAOID' , 'IVAO ID');
	define ('VATSIMID' , 'VATSIM ID');
	// Fleet list
	define ('FLEET_VA' , 'Флот');
	define ('FLEET_VA_LOC' , 'Флот AT ');
	define ('FLEET_VA_TYPE' , 'Флот TYPE ');
	define ('REGISTRY' , 'Tail Number');
	define ('TYPE' , 'Тип');
	define ('LOCATION_PLANE' , 'Расположение');
	define ('STATUS_PLANE' , 'Статус');
	define ('HOURS_PLANE' , 'Часы');
	define ('NAME_PLANE' , 'Name');
	define ('BOOKED_PLANE' , 'Забукан');
	define ('PLANE_FREE' , 'Свободен');
	define ('PLANE_MAINTENANCE' , 'На обслуживании');
	define ('PLANE_BOOKED' , 'Забукан');
	define ('INFO_PLANE' , 'Инфо');
	// Routes list
	define ('ROUTES_VA' , 'Маршруты');
	define ('FLIGHT_VA' , 'Полеты');
	define ('DEPARTURE' , 'Вылет');
	define ('ARRIVAL' , 'Прилет');
	define ('DEPARTURE_TIME' , 'Время вылета');
	define ('ARRIVAL_TIME' , 'Время прилета');
	define ('ROUTE_PLANE' , 'Тип судна');
	// Pilot Register form
	define ('REGISTER_FORM' , 'РЕГИСТРАЦИЯ');
	define ('PILOT_NAME_REG_FORM' , 'Имя:');
	define ('PILOT_LASTNAME_REG_FORM' , 'Фамилия:');
	define ('PILOT_BIRTHDATE_REG_FORM' , 'Дата рождения:');
	define ('PILOT_IVAOID_REG_FORM' , 'IVAO ID:');
	define ('PILOT_VATSIMID_REG_FORM' , 'VATSIM ID:');
	define ('PILOT_COUNTRY_REG_FORM' , 'Страна:');
	define ('PILOT_LANGUAGE_REG_FORM' , 'Язык:');
	define ('PILOT_CITY_REG_FORM' , 'Город:');
	define ('PILOT_HUB_REG_FORM' , 'Хаб:');
	define ('PILOT_EMAIL_REG_FORM' , 'Email:');
	define ('PILOT_PASSWORD_REG_FORM' , 'Password:');
	define ('PILOT_CONFIRMPASSWORD_FORM' , 'Confirm Password:');
	define ('PILOT_COMMENTS_REG_FORM' , 'Камент:');
	define ('BUTTONSUBMIT_REG_FORM' , 'Зарегать');
	define ('PILOT_NAME_PLACEHOLER_REG_FORM' , 'Имя');
	define ('PILOT_LASTNAME_PLACEHOLER_REG_FORM' , 'Фамилия');
	define ('PILOT_BIRTHDATE_PLACEHOLER_REG_FORM' , 'Дата рождения');
	define ('PILOT_IVAOID_PLACEHOLER_REG_FORM' , 'IVAO ID');
	define ('PILOT_VATSIMID_PLACEHOLER_REG_FORM' , 'VATSIM ID');
	define ('PILOT_CITY_PLACEHOLER_REG_FORM' , 'Город');
	define ('PILOT_EMAIL_PLACEHOLER_REG_FORM' , 'Email');
	define ('PILOT_PASSWORD_PLACEHOLER_REG_FORM' , 'Password');
	define ('PILOT_COMMENTS_PLACEHOLER_REG_FORM' , 'Камент');
	define ('READ_RULES' , 'Я прочитал, и согласен с правилами Виртуальной Авиакомпании SovTrans');
	// Pilot Register Succesfull Page (index.php?page=pilot_insert)
	define ('REGISTER_SUCCESSFUL' , 'Успешная регистрация');
	define ('REGISTER_SUCCESSFUL_MSG' , 'Мы получили Ваш запрос! Он будет обработан в течении 24 часов!
Вы получите email как только мы одобрим вашу заявку. (убедитесь что ваша почта может принимать письма от admin@SovTrans.tk - если вы не получили письмо в течении суток, проверьте папку СПАМ!)');
	define ('REGISTER_CAPTCHA_MSG' , 'Капча неверна, попробуй еще!');
	define ('REGISTER_WRONG' , 'Неверные данные');
	define ('REGISTER_WRONG_MSG' , 'Пилот с такой почтой уже существует!.');
	define ('REGISTER_CLOSED_MSG' , 'В данный момент нет вакансий в компании. Ждите следующего набора персонала.');
	// Password Recover
	define ('FORGOT_PASSWORD' , 'FORGOT PASSWORD');
	define ('PILOT_CALLSIGN_PASSWORD_FORM' , 'Callsign:');
	define ('PILOT_CALLSIGN_PLACEHOLDER_PASSWORD_FORM' , 'Enter Callsign');
	define ('PILOT_EMAIL_PASSWORD_FORM' , 'Email:');
	define ('PILOT_EMAIL_PLACEHOLDER_PASSWORD_FORM' , 'Enter Email');
	define ('BUTTONSUBMIT_PASSWORD_FORM' , 'Reset Password');
	define ('PASSWORD_RESET_WRONG' , 'Reset Password');
	define ('PASSWORD_RESET_WRONG_MSG' , 'Incorrect callsign or email address');
	define ('PASSWORD_RESET_OK' , 'Reset Password');
	define ('PASSWORD_RESET_OK_MSG' , 'The new password is sent to your email address.');
	// Home Page (index.php)
	define ('WELCOME_VA' , 'ДОБРО ПОЖАЛОВАТЬ В ');
	define ('FLIGHT_NETWORKS' , 'FLIGHT NETWORKS');
	define ('TWEETS' , 'ТВИТЫ');
	// Home Page LAST FLIGTS grid
	define ('LATEST_FLIGHTS_VA' , 'КРАЙНИЕ ПОЛЕТЫ');
	define ('LF_CALLSIG' , 'Callsign');
	define ('LF_PILOT' , 'Пилот');
	define ('LF_DEPARTURE' , 'Вылет');
	define ('LF_ARRIVAL' , 'Прилет');
	define ('LF_FLIGHTDATE' , 'Дата');
	define ('LF_FLIGHTTIME' , 'Время полета');
	// Home Page STATICS grid
	define ('STATISTICS_VA' , 'СТАТИСТИКА');
	define ('ST_NUMPILOTS' , 'Пилоты');
	define ('ST_NUMPLANES' , 'Самолеты в флоте');
	define ('ST_NUMROUTES' , 'Маршруты');
	define ('ST_NUMFLIGHTS' , 'Полетов всего');
	define ('ST_NUMCHARTER' , 'Чартерные рейсы');
	define ('ST_NUMREGULAR' , 'Регулярные рейсы');
	define ('ST_PERREGULAR' , '% Регулярных рейсов');
	// Home Page NEWEST PILOTS grid
	define ('NEWEST_PILOTS_VA' , 'НОВЫЕ ПИЛОТЫ');
	define ('NEWPILOT' , 'Пилот');
	define ('NEWJOINED' , 'Регистрация');
	// Home Page NOTAMS grid
	define ('NOTAMS_VA' , 'NOTAMS');
	define ('NOTAM_NAME' , 'NOTAM');
	define ('NOTAM_DATE' , 'Дата');
	// Home Page FUTURE EVENTS grid
	define ('FUTURE_EVENTS' , 'СОБЫТИЯ');
	define ('EVENT_NAME' , 'Событие');
	define ('EVENT_DATE' , 'Дата');
	// NOTAM table
	define ('NOTAM' , 'НОТАМ');
	define ('NOTAM_NAME_PANEL' , 'NOTAM имя');
	define ('NOTAM_CREATE_DATE' , 'NOTAM дата создания');
	define ('NOTAM_PUBLISH_DATE' , 'NOTAM дата публикации');
	define ('NOTAM_TEXT' , 'NOTAM Текст');
	// EVENT table
	define ('EVENT' , 'EVENT');
	define ('EVENT_NAME_PANEL' , 'Event Name');
	define ('EVENT_CREATE_DATE' , 'Event Creation Date');
	define ('EVENT_PUBLISH_DATE' , 'Event Publish Date');
	define ('EVENT_TEXT' , 'Event Text');
	// Pilot page
	define ('PILOT_PROFILE' , 'ПРОФИЛЬ');
	define ('PILOT_STATICS' , 'ПЕРСОНАЛЬНАЯ СТАТИСТИКА');
	define ('PILOT_CERTIFICATIONS' , 'СЕРТИФИКАТЫ ПИЛОТА');
	define ('PILOT_NAME' , 'Имя:');
	define ('PILOT_CALLSIGN' , 'Callsign:');
	define ('PILOT_COUNTRY' , 'Страна:');
	define ('PILOT_CITY' , 'Город:');
	define ('PILOT_HUB' , 'Хаб:');
	define ('PILOT_LOCATION' , 'Location:');
	define ('PILOT_RANK' , 'Ранг:');
	define ('PILOT_SALARY' , 'Зарплата в час:');
	define ('PILOT_MONEY' , 'Деньги:');
	define ('PILOT_REGISTERDATE' , 'Дата регистрации:');
	define ('PILOT_FLIGHTS' , 'Всего полетов:');
	define ('PILOT_HOURS' , 'Всего часов:');
	define ('PILOT_FLIGHTSREGULAR' , 'Регулярные рейсы:');
	define ('PILOT_FLIGHTSCHARTER' , 'Чартерные рейсы:');
	define ('PILOT_DISTANCE' , 'Дистанция:');
	define ('PILOT_PERFLIGHTREGULAR' , '% Регулярных рейсов:');
	define ('PILOT_MANUALREPORT' , 'Ручные отчеты:');
	define ('PILOT_FSKEEPERREPORT' , 'FS Keeper отчеты:');
	define ('PILOT_FSACARSREPORT' , 'FS Acars отчеты:');
	define ('PILOT_VAMACARSREPORT' , 'VAM Acars отчеты:');
	define ('PILOT_FLIGTH_MAP' , 'КАРТА КРАЙНИЕ 10 ПОЛЕТОВ');
	define ('PILOT_FLIGTHS' , 'ПОЛЕТЫ');
	define ('PILOT_FLIGTHS_DEP' , 'Вылет');
	define ('PILOT_FLIGTHS_ARR' , 'Прилет');
	define ('PILOT_FLIGTHS_DATE' , 'Дата');
	define ('PILOT_FLIGTHS_DUR' , 'Длительность');
	define ('PILOT_FLIGTHS_DIST' , 'Дистанция');
	define ('PILOT_FLIGTHS_TYPE' , 'Тип');
	define ('PILOT_FLIGTHS_VALI' , 'Валидация');
	define ('PILOT_FLIGTHS_DETAILS' , 'Детали');
	// FSACARS LOG page
	define ('FSACARS_TRACK' , 'FLIGHT TRACK');
	define ('FSACARS_PARAMETER' , 'Parameter');
	define ('FSACARS_VALUE' , 'Value');
	define ('FSACARS_DEPARTURE' , 'Departure:');
	define ('FSACARS_ARRIVAL' , 'Arrival:');
	define ('FSACARS_FLIGHTYPE' , 'Flight type:');
	define ('FSACARS_FLIGHT_CHARTER' , 'Чартер');
	define ('FSACARS_FLIGHT_REGULAR' , 'Регулярный');
	define ('FSACARS_STATUS_VALIDATED' , 'Validated');
	define ('FSACARS_STATUS_NOVALIDATED' , 'Pending Validation');
	define ('FSACARS_STATUS_REJECTED' , 'Rejected');
	define ('FSACARS_STATUS' , 'Status:');
	define ('FSACARS_DATE' , 'Date:');
	define ('FSACARS_DURATION' , 'Duration:');
	define ('FSACARS_PLANETYPE' , 'Aircraft type:');
	define ('FSACARS_FUEL' , 'Fuel:');
	define ('FSACARS_DISTANCE' , 'Distance:');
	define ('FSACARS_TOUCHDOWN' , 'Landing rate:');
	define ('FSACARS_LOG' , 'Log:');
	// FSKEEPER LOG page
	define ('FSKEEPER_TRACK' , 'FLIGHT TRACK');
	define ('FSKEEPER_PILOT' , 'Pilot:');
	define ('FSKEEPER_AIRCRAFT' , 'Aircraft:');
	define ('FSKEEPER_DISTANCE' , 'Distance:');
	define ('FSKEEPER_DEPARTURE' , 'Departure:');
	define ('FSKEEPER_ARRIVAL' , 'Arrival:');
	define ('FSKEEPER_TIME' , 'Time:');
	define ('FSKEEPER_DEPARTURE_SID' , 'SID:');
	define ('FSKEEPER_DEPARTURE_RWY' , 'Departure Rwy:');
	define ('FSKEEPER_DEPARTURE_TRANS' , 'Departure TA:');
	define ('FSKEEPER_ARRIVAL_SID' , 'STAR:');
	define ('FSKEEPER_ARRIVAL_RWY' , 'Arrival Rwy:');
	define ('FSKEEPER_ARRIVAL_TRANS' , 'Arrival TA:');
	define ('FSKEEPER_ZFW' , 'ZFW:');
	define ('FSKEEPER_BFUEL' , 'Block Fuel:');
	define ('FSKEEPER_FFUEL' , 'Flight Fuel:');
	define ('FSKEEPER_VALIDATED' , 'Validated:');
	define ('FSKEEPER_TYPE' , 'Type:');
	define ('FSKEEPER_REGISTRY' , 'Tail Number:');
	define ('FSKEEPER_FLIGHT_CHARTER' , 'Charter');
	define ('FSKEEPER_FLIGHT_REGULAR' , 'Regular');
	define ('FSKEEPER_STATUS_VALIDATED' , 'Validated');
	define ('FSKEEPER_STATUS_NOVALIDATED' , 'Pending validation');
	define ('FSKEEPER_STATUS_REJECTED' , 'Rejected');
	define ('FSKEEPER_PASSENGERS' , 'Passengers:');
	define ('FSKEEPER_CARGO' , 'Cargo:');
	define ('FSKEEPER_ALTERNATE' , 'Alternate airport:');
	define ('FSKEEPER_LANDVS' , 'Landing VS:');
	define ('FSKEEPER_LANDIAS' , 'Landing IAS:');
	define ('FSKEEPER_SCORE' , 'Flight Score:');
	define ('FSKEEPER_LANDING_ANALYSIS' , 'АНАЛИТИКА ПОСАДОК');
	define ('FSKEEPER_ROUTE' , 'ROUTE');
	define ('FSKEEPER_CRITIQUE' , 'FSKEEPER CRITIQUE');
	define ('FSKEEPER_MAPS' , 'MAPS');
	// Pilot options
	define ('PILOT_ACTIONS' , 'ПИЛОТУ');
	define ('OPTION_MAIL' , 'Внутренняя почта');
	define ('OPTION_ROUTE_RESERVE' , 'Забукать маршрут');
	define ('OPTION_CHANGE_LOCATION' , 'Изменить аэропорт');
	define ('OPTION_BANK' , 'Мои финансы');
	define ('OPTION_MANUAL_PIREP' , 'Ручной отчет');
	define ('OPTION_PROFILE' , 'Изменить профиль');
	define ('OPTION_STATS' , 'Моя статистика');
	define ('OPTION_VA_PARAMETER' , 'Параметры ВА');
	define ('OPTION_DOWNLOADS' , 'Загрузки');
	// VA Parameters
	define ('VA_PARAMETERS' , 'VA ПАРАМЕТРЫ');
	define ('PARAMETER' , 'Параметр');
	define ('VALUE' , 'Значение');
	define ('COST_SHORT_JUMP' , 'Цена короткого прыжка:');
	define ('COST_MEDIUM_JUMP' , 'Цена среднего прыжка:');
	define ('COST_LONG_JUMP' , 'Цена длинного прыжка:');
	define ('PLANE_STATUS_MAINTENANCE' , 'Aircraft enter in maintenance at % status:');
	define ('LANDING_RATE_CRASH' , 'Вертикальная скорость на посадке - разбился!:');
	define ('STATUS_LOST_1' , 'Aircraft status lost when landing rate between 0 ft/min and -');
	define ('STATUS_LOST_2' , 'Aircraft status lost when landing rate between -');
	define ('AND_STRING' , ' and -');
	define ('MINIMUN_AIRCRAFT_WEAR' , 'Aircraft status lost in every flight:');
	define ('AIRCRAFT_MAINTENANCE_DURATION' , 'Aircraft maintenance duration:');
	define ('AIRCRAFT_REPARATION_DURATION' , 'Aircraft reparation duration after crash:');
	define ('PENALTY_IN_CRASH' , 'Economic penalty in case of crash:');
	define ('SALARY_PER_HOUR_FOR_YOUR_RANK' , 'Зарплата в час - основана на Вашем ранге:');
	define ('SALARY_REDUCTION_CHARTER' , 'Salary reduction for charter flights:');
	define ('DAYS' , ' дней');
	// My Bank
	define ('FINANCIAL_TRANSACTIONS' , 'FINANCIAL TRANSACTIONS');
	define ('BANK_DATE' , 'Дата');
	define ('BANK_AMOUNT' , 'Сумма');
	define ('BANK_REASON' , 'Change Location / Flight');
	define ('BANK_TOTAL_MONEY' , 'Всего денег: ');
	// Book a route
	define ('AVAILABLE_ROUTES' , 'СВОБОДНЫЕ МАРШРУТЫ');
	define ('ROUTES_BOOKED' , 'CURRENT AIRCRAFT & ROUTE BOOKED');
	define ('AVAILABLE_AIRCRAFT' , 'AVAILABLE AIRCRAFTS');
	define ('BOOK_ROUTE_FLIGHT' , 'Flight');
	define ('BOOK_ROUTE_DEPARTURE' , 'Вылет');
	define ('BOOK_ROUTE_ARRIVAL' , 'Прилет');
	define ('BOOK_ROUTE_ALTERNATIVE' , 'Запасной');
	define ('BOOK_ROUTE_TIME_DEP' , 'Time Dep.');
	define ('BOOK_ROUTE_TIME_ARR' , 'Time Arr.');
	define ('BOOK_ROUTE_INFORMATION' , 'Информация');
	define ('BOOK_ROUTE_ARICRAFT_TYPE' , 'Aircraft type');
	define ('BOOK_ROUTE_ARICRAFT_REG' , 'Tail Number');
	define ('BOOK_ROUTE_ARICRAFT_STATUS' , 'Aircraft status');
	define ('BOOK_ROUTE_ARICRAFT_BOOK' , 'Aircraft Book');
	define ('BOOK_ROUTE_ARICRAFT_BOOK_MSG' , 'Aircraft Booked');
	define ('BOOK_ROUTE_CANCEL_BTN' , ' Cancel booking');
	define ('BOOK_ROUTE_CANCEL' , ' Cancel');
	define ('BOOK_ROUTE_CONFIRM' , 'Booking successful. The booking will be cancelled automatically in 24 hours.');
	define ('BOOK_ROUTE_CONFIRMATION' , 'CONFIRMATION');
	// Change Location
	define ('LOCATION_CHANGE' , 'LOCATION CHANGE');
	define ('LOCATION_CHANGE_LOCATION' , 'Location:');
	define ('LOCATION_CHANGE_BTN' , 'Change');
	// Manual Pirep
	define ('MANUAL_PIREP' , 'MANUAL PIREP');
	define ('MANUAL_PIREP_DATE' , 'Date:');
	define ('MANUAL_PIREP_DATE_PH' , 'Enter Date');
	define ('MANUAL_PIREP_DEP' , 'Departure:');
	define ('MANUAL_PIREP_DEP_PH' , 'Enter Departure');
	define ('MANUAL_PIREP_ARR' , 'Arrival:');
	define ('MANUAL_PIREP_ARR_PH' , 'Enter Arrival');
	define ('MANUAL_PIREP_TIME' , 'Flight time:');
	define ('MANUAL_PIREP_TIME_PH' , 'Enter Flight time');
	define ('MANUAL_PIREP_DISTANCE' , 'Distance:');
	define ('MANUAL_PIREP_DISTANCE_PH' , 'Enter Distance');
	define ('MANUAL_PIREP_FUEL' , 'Fuel:');
	define ('MANUAL_PIREP_FUEL_PH' , 'Enter Fuel');
	define ('MANUAL_PIREP_AIRCRAFT' , 'Aircraft:');
	define ('MANUAL_PIREP_COMMENT' , 'Comments:');
	define ('MANUAL_PIREP_COMMENT_PH' , 'Enter Comments');
	define ('MANUAL_PIREP_FLIGHT_TYPE' , 'Flight Type:');
	define ('MANUAL_PIREP_REG' , 'Regular');
	define ('MANUAL_PIREP_CHARTER' , 'Charter');
	define ('MANUAL_PIREP_SUBMIT_BTN' , 'Submit');
	define ('MANUAL_PIREP_EDIT_BTN' , 'Edit');
	define ('MANUAL_PIREP_CANCEL_BTN' , 'Cancel');
	define ('MANUAL_PIREP_CONFIRM_BTN' , 'Confirm');
	// Flights done by a plane plane_info_public.php
	define ('AIRCRAFT_FLIGHTS' , 'FLIGHTS FOR AIRCRAFT WITH TAIL NUMBER ');
	define ('AIRCRAFT_FLIGHTS_DATE' , 'Date');
	define ('AIRCRAFT_FLIGHTS_PILOT' , 'Pilot');
	define ('AIRCRAFT_FLIGHTS_CALLSIGN' , 'Callsign');
	define ('AIRCRAFT_FLIGHTS_FLIGHT' , 'Flight');
	define ('AIRCRAFT_FLIGHTS_DEP' , 'Departure');
	define ('AIRCRAFT_FLIGHTS_ARR' , 'Arrival');
	define ('AIRCRAFT_FLIGHTS_DISTANCE' , 'Distance');
	define ('AIRCRAFT_FLIGHTS_FUEL' , 'Fuel');
	// Change location jump_request.php
	define ('CHANGE_LOCATION' , 'Смета местоположения');
	define ('CHANGE_LOCATION_ICAO' , 'Аэропорт (ICAO): ');
	define ('CHANGE_LOCATION_SUBMIT_BTN' , 'Прыгнуть');
	// MY PROFILE myprofile.php
	define ('MY_PROFILE' , 'МОЙ ПРОФИЛЬ');
	define ('MY_PROFILE_UPDATE_BTN' , 'Обновить');
	define ('MY_PROFILE_UPDATED' , 'Ваш профиль обновлен');
	// INTERNAL MAIL mails.php
	define ('MAILS' , 'INTERNAL MAIL');
	define ('MAILS_NEW' , 'NEW MESSAGE');
	define ('MAILS_REPLY' , 'REPLY MESSAGE');
	define ('MAILS_DATE' , 'Дата');
	define ('MAILS_FROM' , 'От');
	define ('MAILS_SUBJECT' , 'Тема');
	define ('MAILS_SUBJECT_PH' , 'Enter the subject');
	define ('MAILS_ACTIONS' , 'Actions');
	define ('MAILS_NEW_MESSAGE_LNK' , ' New message');
	define ('MAILS_NEW_TO' , 'To');
	define ('MAILS_MESSAGE' , 'Message');
	define ('MAILS_MESSAGE_PH' , 'Enter Message');
	define ('MAILS_SEND_BTN' , 'Send');
	// STATISTICS
	define ('STATISTICS' , 'STATISTICS');
	define ('STATISTICS_PERCENTAGE_REG_VS_CHARTER' , 'ПРОЦЕНТАЖ ЧАРТЕР-РЕГУЛЯРНЫЙ');
	define ('STATISTICS_PERCENTAGE_BY_REPORT_TYPE' , 'ПРОЦЕНТАЖ ПО ТИПУ ОТЧЕТА');
	define ('STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE' , 'ПРОЦЕНТАЖ ПО ТИПУ СУДНА');
	define ('STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH' , 'КОЛ-ВО ПОЛЕТОВ В ДЕНЬ В ЭТОМ МЕСЯЦЕ');
	define ('STATISTICS_TOP5_HOUR' , 'TOP 5 ЗА ЧАС');
	define ('STATISTICS_TOP5_FLIGTH' , 'TOP 5 ПО ПОЛЕТАМ');
	define ('STATISTICS_TOP5_LANDING' , 'TOP 5 ПОСАДОК');
	define ('STATISTICS_TOP5_ROUTES' , 'TOP 5 МАРШРУТОВ');
	define ('STATISTICS_CALLSIGN' , 'Callsign');
	define ('STATISTICS_PILOT' , 'Пилот');
	define ('STATISTICS_HOURS' , 'Часов');
	define ('STATISTICS_FLIGHTS' , 'Полетов');
	define ('STATISTICS_TOUCH' , 'Касание (ft/min)');
	define ('STATISTICS_ROUTE' , 'Маршрут');
	// strings used index pilot
	define ('INDEX_PILOT_MANUAL' , 'Ручной');
	define ('INDEX_PILOT_KEEPER' , 'FS Kepper');
	define ('INDEX_PILOT_FSACARS' , 'FS ACARS');
	define ('INDEX_PILOT_REGULAR' , 'Регулярный');
	define ('INDEX_PILOT_CHARTER' , 'Чартерный');
	define ('INDEX_PILOT_COMMENT' , 'Камент');
	// User not recognized
	define ('INDEX_NO_USER' , 'Сессия закрыта. User or password not valid');
	// Administration options
	define ('ADM_PARA' , 'VA параметры');
	define ('ADM_HUB_MGR' , 'Мэнеджер хабов');
	define ('ADM_FLEET_TYPE_MGR' , 'Типы флота');
	define ('ADM_FLEET_MGR' , 'Менеджер флота');
	define ('ADM_PILOT_RANK_MGR' , 'Менеджер рангов');
	define ('ADM_PILOT_MGR' , 'Менеджер пилотов');
	define ('ADM_ROUTE_MGR' , 'Менеджер маршрутов');
	define ('ADM_ROUTE_FLEET_MGR' , 'Route assignation');
	define ('ADM_USER_TYPE_MGR' , 'User type');
	define ('ADM_JUMP_MGR' , 'Jump validator');
	define ('ADM_FLIGHT_MGR' , 'Flight validator');
	define ('ADM_NOTAM_MGR' , 'Менеджер NOTAM');
	define ('ADM_EVENT_MGR' , 'Менеджер событий');
	define ('ADM_EMAIL_MGR' , 'Email Менеджер');
	define ('ADM_LANGUAGES_MGR' , 'Язык. Менеджер');
	define ('ADM_ACARS_MGR' , 'ACARS Parameters');
	define ('ADM_NEW_MODULE_MGR' , 'New module');
	// Validate flights
	define ('VALIDATE_FLIGHTS' , 'FLIGHTS VALIDATION');
	define ('VALIDATE_CALLSIGN' , 'Callsign');
	define ('VALIDATE_DEPARTURE' , 'Departure');
	define ('VALIDATE_ARRIVAL' , 'Arrival');
	define ('VALIDATE_DATE' , 'Date');
	define ('VALIDATE_DURATION' , 'Duration');
	define ('VALIDATE_DISTANCE' , 'Distance');
	define ('VALIDATE_TYPE' , 'Type');
	define ('VALIDATE_LOG' , 'Log');
	define ('VALIDATE_REGULAR' , 'Regular');
	define ('VALIDATE_CHARTER' , 'Charter');
	define ('VALIDATE_ACTION' , 'Action');
	define ('VALIDATE_FLIGHT_REGULAR' , 'Regular Flight  ');
	define ('VALIDATE_FLIGHT_CHARTER' , 'Charter Flight  ');
	// Validate jumps
	define ('VALIDATE_JUMPS' , 'JUMPS VALIDATION');
	define ('VALIDATE_JUMP_CALLSIGN' , 'Callsign');
	define ('VALIDATE_JUMP_DEPARTURE' , 'Departure');
	define ('VALIDATE_JUMP_ARRIVAL' , 'Arrival');
	define ('VALIDATE_JUMP_DATE' , 'Date');
	define ('VALIDATE_JUMP_JUMP1' , 'Jump type 1');
	define ('VALIDATE_JUMP_JUMP2' , 'Jump type 2');
	define ('VALIDATE_JUMP_JUMP3' , 'Jump type 3');
	define ('VALIDATE_JUMP' , 'Jump ');
	// VAM ACARS
	define ('VAMACARS_SIMACARS' , 'SIMACARS REPORT');
	define ('VAMACARS_FLITGH_DETAILS' , 'FLIGHT DETAILS');
	define ('VAMACARS_LANDANALYSIS' , 'АНАЛИТИКА ПОСАДОК');
	define ('VAMACARS_ROUTE' , 'ROUTE');
	define ('VAMACARS_REMARKS' , 'REMARKS');
	define ('VAMACARS_DETAILS' , 'DETAILS');
	define ('VAMACARS_STATUS_VALIDATION' , 'Validation');
	define ('VAMACARS_STATUS_VALIDATED' , 'Validated');
	define ('VAMACARS_STATUS_REJECTED' , 'Rejected');
	define ('VAMACARS_STATUS_NOVALIDATED' , 'Pending Validation');
	define ('VAMACARS_TYPE' , 'Type');
	define ('VAMACARS_FLIGHT_CHARTER' , 'Charter');
	define ('VAMACARS_FLIGHT_REGULAR' , 'Regular');
	define ('VAMACARS_REGISTRY' , 'Tail Number');
	define ('VAMACARS_ZFW' , 'ZFW');
	define ('VAMACARS_BFUEL' , 'Block Fuel');
	define ('VAMACARS_FFUEL' , 'Flight Fuel');
	define ('VAMACARS_PASSENGERS' , 'Passengers');
	define ('VAMACARS_CARGO' , 'Cargo');
	define ('VAMACARS_ALTERNATE1' , 'Alternate');
	define ('VAMACARS_WEIGHTUNIT' , 'Weight Unit');
	define ('VAMACARS_DATE' , 'DATE');
	define ('VAMACARS_DEPARTURE' , 'Departure');
	define ('VAMACARS_ARRIVAL' , 'Arrival');
	define ('VAMACARS_DURATION' , 'Duration');
	define ('VAMACARS_DISTANCE' , 'DISTANCE');
	define ('VAMACARS_DEP_TIME' , 'Departure Time');
	define ('VAMACARS_CRUISE_SPEED' , 'Cruise Speed');
	define ('VAMACARS_FLIGHT_LEVEL' , 'Flight Level');
	define ('VAMACARS_FLIGHT_TYPE' , 'Flight Type');
	define ('VAMACARS_AIRCRAFT_TYPE' , 'Aircraft Type');
	define ('VAMACARS_COMMENTS' , 'Pilot Comments');
	define ('VAMACARS_NETWORK' , 'Network');
	define ('VAMACARS_DATEDETAIL' , 'Date');
	define ('VAMACARS_FUELCONSUMED' , 'FUEL CONSUMED');
	define ('VAMACARS_LANDING_PITCH' , 'Landing Pitch');
	define ('VAMACARS_LANDING_BANK' , 'Landing Bank');
	define ('VAMACARS_LANDING_FLAPS' , 'Landing Flaps');
	define ('VAMACARS_LANDING_FORCEG' , 'Landing Force G');
	define ('VAMACARS_LANDING_NAV' , 'Navigation Lights');
	define ('VAMACARS_LANDING_LDG' , 'Landing Lights');
	define ('VAMACARS_LANDING_STR' , 'Strobe Lights');
	define ('VAMACARS_LANDING_BEA' , 'Beacon Lights');
	define ('VAMACARS_IAS' , 'IAS');
	define ('VAMACARS_GS' , 'GS');
	define ('VAMACARS_ALTITUDE' , 'ALTITUDE');
	define ('VAMACARS_FUEL_USED' , 'FUEL CONSUMED');
	define ('VAMACARS_OAT' , 'OAT');
	define ('VAMACARS_FLIGHTSTATUS' , 'FLIGHT STATUS');
	define ('VAMACARS_VAM_MAP' , 'FLIGHT MAP');
	define ('VAMACARS_EVENTS' , 'EVENT');
	define ('VAMACARS_MAIN_EVENTS' , 'MAIN EVENTS');
	define ('VAMACARS_ACARS_DATA' , 'ACARS DATA');
	define ('VAMACARS_HEADING' , 'HEADING');
	define ('VAMACARS_FLIGHT_STATUS' , 'FLIGHT STATUS');
	define ('VAMACARS_CRITICAL_EVENTS' , 'CRITICAL EVENTS');
	define ('VAMACARS_VAM_CHART' , 'ALTITUDE CHART');
	// Downloads
	define ('DOWNLOADS' , 'DOWNLOADS');
	define ('DOWNLOAD_NAME' , 'NAME');
	define ('DOWNLOAD_LINK' , 'LINK');
	// VAM 2.3 BEGIN
	define ('VAMACARS_VALIDATION_COMMENTS' , 'VALIDATION COMMENTS');
	define ('VAMACARS_VALIDATION_COMMENT' , 'COMMENT');
	define ('VAMACARS_FLIGHT_RATING' , 'Flight Rating');
	define ('VAMACARS_CRASH' , 'Crashed');
	define ('VAMACARS_VALIDATOR_COMMENTS' , 'Validator Comments');
	define ('VAMACARS_VALIDATION_ADD_COMMENT' , 'Add comment');
	define ('VAMACARS_VALIDATION_ACCEPT' , 'Acept');
	define ('VAMACARS_VALIDATION_REJECT' , 'Reject');
	define ('VAMACARS_NO' , 'No');
	define ('VAMACARS_YES' , 'Yes');
	define ('VAMACARS_OK' , 'OK');
	define ('VAMACARS_FAIL' , 'Fail');
	define ('VAMACARS_FLIGHTFAILURES' , 'FLIGHT FAILURES');
	define ('VAMACARS_BEACONOFFENGINEON' , 'Beacon off & Engine Running');
	define ('VAMACARS_IAS1000' , 'KIAS Above 250  below 10000 FT');
	define ('VAMACARS_LIGHTBELOW1000' , 'Lights OFF below 10000 FT');
	define ('VAMACARS_LIGHTABOVE1000' , 'Lights ON above 10000 FT');
	define ('VAMACARS_STALL' , 'Stall');
	define ('VAMACARS_OVERSPEED' , 'Overspeed');
	define ('VAMACARS_PAUSE' , 'Flight paused');
	define ('VAMACARS_REFUEL' , 'Refueling');
	define ('VAMACARS_SLEW' , 'Slew detected');
	define ('VAMACARS_TAXILIGHTS' , 'Taxi & Taxi lights off');
	define ('VAMACARS_TAKEOFFLIGHTSOFF' , 'Take off & lights off');
	define ('VAMACARS_LANDINGLIGHTSOFF' , 'Landing & lights off');
	define ('VAMACARS_NOTARRIVED' , 'Landed in not planned airport');
	define ('VAMACARS_NUMFAILURES' , 'Number failures');
	define ('VAMACARS_TAXISPEED' , 'Taxi Speed');
	define ('PILOT_FSKEEPER_VALIDATOR' , 'VALIDATOR COMMENTS & FLIGHT RATING');
	define ('MANUAL_PIREP_VALIDATOR_COMMENTS' , 'Validator comments:');
	define ('MANUAL_PIREP_VALIDATION' , 'Validation:');
	define ('MANUAL_PIREP_VALIDATION_DATE' , 'Validation date:');
	define ('MANUAL_PIREP__STATUS_VALIDATED' , 'Validated');
	define ('MANUAL_PIREP__STATUS_NOVALIDATED' , 'Pending Validation');
	define ('MANUAL_PIREP__STATUS_REJECTED' , 'Rejected');
	// VAM 2.4 BEGIN
	define ('AIRPORT_AIRPORT_METAR' , 'METAR AND TAF INFORMATION');
	define ('AIRPORT_AIRPORT_MAP' , 'AIRPORT MAP');
	define ('AIRPORT_AIRPORT_FREQUENCIES' , 'AIRPORT FREQUENCIES');
	define ('AIRPORT_AIRPORT_NAVAIDS' , 'AIRPORT NEAR NAVIGATION AIDS');
	define ('AIRPORT_AIRPORT_NAVAIDS_TYPE' , 'Type');
	define ('AIRPORT_AIRPORT_NAVAIDS_NAME' , 'Name');
	define ('AIRPORT_AIRPORT_NAVAIDS_FREQ' , 'Frequency');
	define ('AIRPORT_RUNWAY_INFO' , 'RUNWAY INFORMATION');
	define ('AIRPORT_RUNWAY' , 'Runway');
	define ('AIRPORT_RUNWAY_LENGTH' , 'Runway length');
	define ('AIRPORT_RUNWAY_WIDTH' , 'Runway width');
	define ('AIRPORT_RUNWAY_ELEVATION' , 'Runway elevation');
	define ('AIRPORT_RUNWAY_THRESHOLD' , 'Runway displaced threshold');
	define ('AIRPORT_RUNWAY_HEADING' , 'Runway heading');
	define ('BOOK_ROUTE_INFO' , 'ROUTE INFORMATION');
	define ('BOOK_ROUTE_DURATION' , 'Duration');
	define ('BOOK_ROUTE_ROUTE' , 'Route');
	define ('BOOK_ROUTE_PRICE' , 'Price');
	define ('BOOK_ROUTE_COMMENTS' , 'Comments');
	define ('ROUTES_VA_SEARCHER', 'Route Searcher');
	define ('VAMACARS_VALIDATION_DELETE','Delete Flight');
	define ('PILOT_RECEIVE_EMAILS','Do you want to receive emails?');
	// VAM 2.5
	define ('AIRCRAFT_DETAILS' , 'AIRCRAFT DETAILS');
	define ('AIRCRAFT_DETAILS_PAX' , 'Number of PAX');
	define ('AIRCRAFT_DETAILS_MAX_RANGE' , 'Maximum range');
	define ('AIRCRAFT_DETAILS_CARGO' , 'Cargo capacity');
	define ('AIRCRAFT_DETAILS_LENGTH' , 'Aircraft length');
	define ('AIRCRAFT_DETAILS_MZFW' , 'Maximum zero-fuel weight (MZFW)');
	define ('AIRCRAFT_DETAILS_MLW' , 'Maximum landing weight (MLW)');
	define ('AIRCRAFT_DETAILS_MTOW' , 'Maximum takeoff weight (MTOW)');
	define ('AIRCRAFT_DETAILS_CRUISE_SPEED' , 'Cruising speed');
	define ('AIRCRAFT_DETAILS_CEILING' , 'Service ceiling');
	define ('AIRCRAFT_DETAILS_CREW' , 'Crew members');
	define ('HUB_DETAILS' , 'HUB DETAILS');
	define ('HUB_PILOTS' , 'HUB PILOTS');
	define ('HUB_FLEET' , 'HUB FLEET');
	define ('HUB_ROUTES' , 'HUB ROUTES');
	define ('HUB_MAP_LOCATION' , 'ROUTES MAP');
	define ('HUB_NAME' , 'Name');
	define ('HUB_WEB' , 'Website');
	define ('HUB_NUM_PILOTS' , 'Number of Pilots');
	define ('HUB_NUM_FLEET' , 'Number of Aircrafts');
	define ('HUB_NUM_ROUTES' , 'Number of Routes');
	define ('ADM_TOUR_MODULE_MGR' , 'Tour Manager');
	define ('ADM_FINANTIAL_MODULE_MGR' , 'Financial mgr.');
	define ('OPERATIONS' , 'Возможности');
	define ('HUBS' , 'Хабы');
	define ('TOURS' , 'Туры');
	define ('PILOT_RANKS' , 'Ранги пилотов');
	define ('AWARDS' , 'Награды');
	define ('TOURS_VA' , 'TOURS');
	define ('TOURS_ACTIVE' , 'ACTIVE TOURS');
	define ('TOURS_INACTIVE' , 'INACTIVE TOURS');
	define ('TOUR_DETAILS' , 'TOUR DETAILS');
	define ('TOUR_LEGS' , 'TOUR LEGS');
	define ('TOURS_STATUS' , 'Status');
	define ('TOURS_AWARD' , 'Award');
	define ('TOURS_IMAGE' , 'Image');
	define ('TOURS_NUM_LEGS' , 'Num. Legs');
	define ('TOURS_LEG_STATUS' , 'Legs Status');
	define ('TOURS_NUM_LEGS_ACCEPTED' , 'Num. Legs Accepted');
	define ('TOURS_NUM_LEGS_REPORTED' , 'Num. Legs Reported');
	define ('TOURS_LEGS_REPORT' , 'Report Leg');
	define ('TOURS_DISTANCE' , 'Distance');
	define ('TOURS_NAME' , 'Tour');
	define ('TOURS_START_DATE' , 'Start date');
	define ('TOURS_END_DATE' , 'End date');
	define ('TOURS_ROUTE_INFO' , 'Route & Comments');
	define ('TOURS_ROUTE' , 'Route');
	define ('TOURS_COMMENTS' , 'Comments');
	define ('TOURS_LEG_REPORT' , 'Report Leg');
	define ('TOURS_VALIDATION' , 'TOURS LEGS VALIDATION');
	define ('TOURS_LEG' , 'Leg');
	define ('PILOT_IMAGEUPLOADER_FORM' , 'Pilot Image Uploader');
	define ('PILOT_AWARDS' , 'НАГРАДЫ');
	define ('PILOT_TOURS' , 'ТУРЫ');
	define ('ADM_AWARDS_MGR' , 'Awards manager');
	define ('ADM_AWARDS_PILOR_MGR' , 'Awards assig.');
	define ('VAMACARS_LANDINGQNH' , 'Wrong altimeter in Landing');
	define ('VAMACARS_TAKEOFFQNH' , 'Wrong altimeter in Take off');
	define ('LAND_WIND' , 'Landing wind');
	define ('LAND_HDG' , 'Landing heading');
	define ('OPTION_TOUR' , 'Сдать лег тура');
	define ('AWARDS_PANEL' , 'НАГРАДЫ');
	define ('AWARD_NAME' , 'Award Name');
	define ('AWARD_IMG' , 'Award Image');
	define ('RANK_PANEL' , 'РАНГИ');
	define ('RANK_IMAGE' , 'Картинка');
	define ('RANK_MIN_HOURS' , 'Минимум часов');
	define ('RANK_MAX_HOURS' , 'Максимум часов');
	// NEW STATS
	define ('ST_MONTH' , 'Месяц');
	define ('ST_YEAR' , 'Год');
	define ('STATISTICS_PILOT_HOURS_YEAR_MONTH' , 'ЧАСОВ В ГОД И МЕСЯЦ');
	define ('STATISTICS_PILOT_FLIGHTS_YEAR_MONTH' , 'ПОЛЕТОВ ЧАСОВ В ГОД И МЕСЯЦ');
	define ('STATISTICS_FLIGHTS_AIRCRAFT_TYPE' , 'TOP 5 ПОЛЕТОВ ПО ТИПАМ');
	define ('STATISTICS_TOP5_AIRCRAFTS' , 'TOP 5 ПОЛЕТОВ ПО САМОЛЕТАМ');
	// FINANCE MODULE
	define ('FLIGHT_FINANCES' , 'ФИНАНСОВЫЙ ОТЧЕТ ПОЛЕТА');
	define ('VA_GLOBAL_FINANCES' , 'VA ОБЩИЙ ФИНАНСОВЫЙ ОТЧЕТ');
	define ('COSTS' , 'ЦЕНА');
	define ('INCOME' , 'ДОХОД');
	define ('INCOME_REGULAR_ROUTES' , 'ДОХОД РЕГУЛЯРНЫХ МАРШРУТОВ');
	define ('AIRCRAFT_PURCHASE' , 'ПОКУПКА БОРТА');
	define ('FINANCE_BALANCE' , 'БАЛАНС');
	define ('GLOBAL_FINANCES' , 'Финансовый отчет');
	define ('COSTS_PILOTS_SALARY' , 'ЗАРПЛАТА ПИЛОТОВ');
	define ('COSTS_AIRCRAFT_REPAIR' , 'ЦЕНА РЕМОНТА БОРТОВ');
	define ('COSTS_AIRCRAFT_MAINTENANCE' , 'ЦЕНА ОБСЛУЖИВАНИЯ БОРТОВ');
	// LIVE MAP
	define ('FLIGHT_STAGE' , 'Стадия полета');
	define ('PERC_DONE' , '% Закончено');
	define ('PENDING_NM' , 'Осталось NM');
	// VAM 2.6
	define ('NEW_MAIL' , 'У вас новое сообщение от другого пилота. Посмотрите во Входящих');
	define ('ADM_COURSES_MGR' , 'Courses mgr. Still on development');
	define ('ADM_TRAININGS_MGR' , 'Training mgr. Still on development');
	define ('ADM_WEB_MGR' , 'Web configuration');
	define ('ADM_STAFF_MGR' , 'Staff configuration');
	define ('ADM_AIRPORTS_MGR' , 'Airports manager');
	define ('ADM_SIMACARS_FLIGHTS_MGR' , 'SIMACARS reports');
	define ('ADM_MANUAL_FLIGTS_MGR' , 'Manual reports');
	define ('VAMACARS_BFUEL_FOB' , 'Block Fuel/Initial FOB');
	define ('RPT_PLANE_OUT_ROUTE' , 'REPORT PLANES OUT OF ROUTE');
	define ('LAST_REGULAR_FLIGHT' , 'Last Regular flight');
	define ('MOVE_TO_HUB' , 'Move to HUB');
	define ('AIRCRAFT_HANGAR' , 'AIRCRAFT MAINTENANCE HISTORIC ');
	define ('HANGAR_IN' , 'Hangar entry date');
	define ('HANGAR_OUT' , 'Hangar exit date');
	define ('LAST_PILOT' , 'Last Pilot');
	define ('REASON' , 'Reason');
	define ('NOT_GRANTED' , 'You do not have access to this page');
	define ('TOUR_DESCRIPTION' , 'Tour description');
	define ('RPT_PILOT_WARNING' , 'Warning Date');
	define ('RPT_PLANE_OUT' , 'Report Aircrafts');
	define ('RPT_PILOT_ACTIVITY' , 'Report Pilots');
	define ('RPT_PILOT_ACT' , 'REPORT PILOTS ACTIVITY');
	define ('SEND_WARNING' , 'Send Warning');
	define ('INACTIVATE' , 'Inactivate');
	define ('TAB_MAIN' , 'Профиль');
	define ('TAB_STATS' , 'Статистика');
	define ('TAB_AWARDS' , 'Награды');
	define ('TAB_TOURS' , 'Туры');
	define ('TAB_CERTIFICATIONS' , 'Сертификаты');
	define ('PILOT_STATS_COUNTRY' , 'ПРОЦЕНТАЖ ПО СТРАНАМ');
	define ('PILOT_STATS_PERC_PLANE' , 'ПРОЦЕНТАЖ САМОЛЕТАМ');
	define ('PILOT_STATS_PERC_DURATION' , 'ПРОЦЕНТАЖ ПРОДОЛЖИТЕЛЬНОСТИ');
	define ('STATISTICS_NUMBER_FLIGTH_PER_MONTH_CURRENT_YEAR' , 'ПОЛЕТОВ ЗА ГОД');
	define ('AVG_DURATION' , 'Общее время');
	define ('AVG_DISTANCE' , 'Общая дистанция');
	define ('AVG_LANDING_VS' , 'Верт. скорость касания');
	define ('LAST_30D_FLIGHT' , 'Полеты за месяц');
?>