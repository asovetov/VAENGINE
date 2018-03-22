<?php
	// NavBar options
	define ('ABOUT' , 'Společnost ');
	define ('PILOTS' , 'Piloti');
	define ('FLEET' , 'Flotila');
	define ('ROUTES' , 'Trasy');
	define ('STAFF' , 'Zaměstnanci');
	define ('RULES' , 'Pravidla');
	define ('SCHOOL' , '	Školení');
	define ('REGISTER' , 'Registrace');
	define ('FORUM' , 'Fórum');
	define ('LANGUAGES' , 'Jazyk');
	define ('LANGUAGE_ES' , 'Español');
	define ('LANGUAGE_EN' , 'English');
	define ('LANGUAGE_CS' , 'Čeština');
	define ('LANGUAGE_FR' , 'Français');
	// NavBar options user logged
	define ('MENU' , 'Akce pilota');
	define ('STATS' , 'Statistika');
	define ('ADMIN' , 'Administrace');
	// Pilot Roster
	define ('PILOT_ROSTER' , 'Piloti');
	define ('CALLSIGN' , 'Volací znak');
	define ('NAME' , 'Jméno');
	define ('HUB' , 'Stanoviště');
	define ('LOCATION' , 'Umístění');
	define ('HOURS' , 'Hodiny');
	define ('RANK' , 'Hodnost');
	define ('COUNTRY' , 'Země');
	define ('STATUS' , 'Status');
	define ('IVAOID' , 'IVAO ID');
	define ('VATSIMID' , 'VATSIM ID');
	// Fleet list
	define ('FLEET_VA' , 'FLOTILA');
	define ('FLEET_VA_LOC' , 'UMÍSTĚNÍ LETADLA ');
	define ('FLEET_VA_TYPE' , 'TYP TETADLA ');
	define ('REGISTRY' , 'Registrace');
	define ('TYPE' , 'Typ');
	define ('LOCATION_PLANE' , 'Umístění');
	define ('STATUS_PLANE' , 'Prestiž');
	define ('HOURS_PLANE' , 'Hodiny');
	define ('NAME_PLANE' , 'Jméno');
	define ('BOOKED_PLANE' , 'Rezervováno');
	define ('PLANE_FREE' , 'Neobsazený');
	define ('PLANE_MAINTENANCE' , 'V údržbě');
	define ('PLANE_BOOKED' , 'Rezervovaný');
	define ('INFO_PLANE' , 'Informace');
	// Routes list
	define ('ROUTES_VA' , 'Trasy');
	define ('FLIGHT_VA' , 'Let');
	define ('DEPARTURE' , 'Odlet');
	define ('ARRIVAL' , 'Přílet');
	define ('DEPARTURE_TIME' , 'Čas odletu');
	define ('ARRIVAL_TIME' , 'Čas příletu');
	define ('ROUTE_PLANE' , 'Typ stroje');
	// Pilot Register form
	define ('REGISTER_FORM' , 'REGISTRACE');
	define ('PILOT_NAME_REG_FORM' , 'Jméno:');
	define ('PILOT_LASTNAME_REG_FORM' , 'Příjmení:');
	define ('PILOT_BIRTHDATE_REG_FORM' , 'Datum narození:');
	define ('PILOT_IVAOID_REG_FORM' , 'IVAO ID:');
	define ('PILOT_VATSIMID_REG_FORM' , 'VATSIM ID:');
	define ('PILOT_COUNTRY_REG_FORM' , 'Země:');
	define ('PILOT_LANGUAGE_REG_FORM' , 'Jazyk:');
	define ('PILOT_CITY_REG_FORM' , 'Město:');
	define ('PILOT_HUB_REG_FORM' , 'Hub:');
	define ('PILOT_EMAIL_REG_FORM' , 'Email:');
	define ('PILOT_PASSWORD_REG_FORM' , 'Heslo:');
	define ('PILOT_CONFIRMPASSWORD_FORM' , 'Potvrzení hesla:');
	define ('PILOT_COMMENTS_REG_FORM' , 'Poznámky:');
	define ('BUTTONSUBMIT_REG_FORM' , 'Registrovat');
	define ('PILOT_NAME_PLACEHOLER_REG_FORM' , 'Vložte jméno');
	define ('PILOT_LASTNAME_PLACEHOLER_REG_FORM' , 'Vložte příjmení');
	define ('PILOT_BIRTHDATE_PLACEHOLER_REG_FORM' , 'Vložte datum narození');
	define ('PILOT_IVAOID_PLACEHOLER_REG_FORM' , 'Vložte IVAO ID');
	define ('PILOT_VATSIMID_PLACEHOLER_REG_FORM' , 'Vložte VATSIM ID');
	define ('PILOT_CITY_PLACEHOLER_REG_FORM' , 'Vložte město');
	define ('PILOT_EMAIL_PLACEHOLER_REG_FORM' , 'Vložte Email');
	define ('PILOT_PASSWORD_PLACEHOLER_REG_FORM' , 'Vložte heslo');
	define ('PILOT_COMMENTS_PLACEHOLER_REG_FORM' , 'Vložte poznámky');
	define ('READ_RULES' , 'Přečetl jsem si pravidla VA, a souhlasím s nimi');
	// Pilot Register Succesfull Page (index.php?page=pilot_insert)
	define ('REGISTER_SUCCESSFUL' , 'Registrace proběhla úspěšně');
	define ('REGISTER_SUCCESSFUL_MSG' , 'Vaší registraci jsme zaznamenali a vyřídíme jí během následujících 24 hodin!
Jakmile bude Vaše registrace vyřízena, obdržíte od nás email. (Ujistěte se, že Váš emailový klient je schopen příjímat zprávy od našeho administrátora. Zkontrolujte ve Vašem emailovém klientovi složku Spam.)');
	define ('REGISTER_WRONG' , 'Chyba během registrace');
	define ('REGISTER_WRONG_MSG' , 'Tuto emailovou adresu již používá jiný pilot.');
	define ('REGISTER_CLOSED_MSG' , 'V současné době nejsou v naší společnosti volná místa. Sledujte naše webové stránky pro případný nábor nových zaměstnanců.');
	// Password Recover
	define ('FORGOT_PASSWORD' , 'ZAPOMENUTÉ HESLO');
	define ('PILOT_CALLSIGN_PASSWORD_FORM' , 'Volací znak:');
	define ('PILOT_CALLSIGN_PLACEHOLDER_PASSWORD_FORM' , 'Vložte volací znak');
	define ('PILOT_EMAIL_PASSWORD_FORM' , 'Email:');
	define ('PILOT_EMAIL_PLACEHOLDER_PASSWORD_FORM' , 'Vložte Email');
	define ('BUTTONSUBMIT_PASSWORD_FORM' , 'Anulovat staré heslo');
	define ('PASSWORD_RESET_WRONG' , 'Anulovat staré heslo');
	define ('PASSWORD_RESET_WRONG_MSG' , 'Nesprávný volací znak nebo emailová adresa');
	define ('PASSWORD_RESET_OK' , 'Anulovat heslo');
	define ('PASSWORD_RESET_OK_MSG' , 'Vaše nové heslo Vám bylo zasláno na uvedenou emailovou adresu.');
	// Home Page (index.php)
	define ('WELCOME_VA' , 'VÍTEJTE NA STRÁNKÁCH');
	define ('FLIGHT_NETWORKS' , 'LETECKÉ TRASY');
	define ('TWEETS' , 'TWEETS');
	// Home Page LAST FLIGTS grid
	define ('LATEST_FLIGHTS_VA' , 'POSLEDNÍ LETY');
	define ('LF_CALLSIG' , 'Volací znak');
	define ('LF_PILOT' , 'Pilot');
	define ('LF_DEPARTURE' , 'Odlet');
	define ('LF_ARRIVAL' , 'Přílet');
	define ('LF_FLIGHTDATE' , 'Datum');
	define ('LF_FLIGHTTIME' , 'Doba letu');
	// Home Page STATICS grid
	define ('STATISTICS_VA' , 'STATISTIKA');
	define ('ST_NUMPILOTS' , 'PilotI');
	define ('ST_NUMPLANES' , 'Naše flotila');
	define ('ST_NUMROUTES' , 'Trasy');
	define ('ST_NUMFLIGHTS' , 'Celkový počet letů');
	define ('ST_NUMCHARTER' , 'Charterové lety');
	define ('ST_NUMREGULAR' , 'Pravidelné lety');
	define ('ST_PERREGULAR' , '% Pravidelných letů');
	// Home Page NEWEST PILOTS grid
	define ('NEWEST_PILOTS_VA' , 'NEJNOVĚJŠÍ PILOTI');
	define ('NEWPILOT' , 'Pilot');
	define ('NEWJOINED' , 'Zaměstnán od');
	// Home Page NOTAMS grid
	define ('NOTAMS_VA' , 'NOTAMS');
	define ('NOTAM_NAME' , 'NOTAM');
	define ('NOTAM_DATE' , 'Datum');
	// Home Page FUTURE EVENTS grid
	define ('FUTURE_EVENTS' , 'PŘIPRAVOVANÉ UDÁLOSTI');
	define ('EVENT_NAME' , 'Událost');
	define ('EVENT_DATE' , 'Datum');
	// NOTAM table
	define ('NOTAM' , 'NOTAM');
	define ('NOTAM_NAME_PANEL' , 'NOTAM název');
	define ('NOTAM_CREATE_DATE' , 'NOTAM Datum vytvoření');
	define ('NOTAM_PUBLISH_DATE' , 'NOTAM Datum zveřejnění');
	define ('NOTAM_TEXT' , 'NOTAM Text');
	// EVENT table
	define ('EVENT' , 'EVENT');
	define ('EVENT_NAME_PANEL' , 'Název události');
	define ('EVENT_CREATE_DATE' , 'Datum vytvoření události');
	define ('EVENT_PUBLISH_DATE' , 'Datum zveřejnění události');
	define ('EVENT_TEXT' , 'Popis události');
	// Pilot page
	define ('PILOT_PROFILE' , 'PROFIL');
	define ('PILOT_STATICS' , 'OSOBNÍ STATISTIKA');
	define ('PILOT_CERTIFICATIONS' , 'CERTIFIKACE PILOTA');
	define ('PILOT_NAME' , 'Jméno:');
	define ('PILOT_CALLSIGN' , 'Volací znak:');
	define ('PILOT_COUNTRY' , 'Země:');
	define ('PILOT_CITY' , 'Město:');
	define ('PILOT_HUB' , 'Hub:');
	define ('PILOT_LOCATION' , 'Umístění:');
	define ('PILOT_RANK' , 'Hodnost:');
	define ('PILOT_SALARY' , 'Hodinová sazba:');
	define ('PILOT_MONEY' , 'Vydělek:');
	define ('PILOT_REGISTERDATE' , 'Datum registrace:');
	define ('PILOT_FLIGHTS' , 'Celkový počet letů:');
	define ('PILOT_HOURS' , 'Celkový počet hodin:');
	define ('PILOT_FLIGHTSREGULAR' , 'Pravidelné lety:');
	define ('PILOT_FLIGHTSCHARTER' , 'Charterové lety:');
	define ('PILOT_DISTANCE' , 'Vzdálenost:');
	define ('PILOT_PERFLIGHTREGULAR' , '% Pravidelných letů:');
	define ('PILOT_MANUALREPORT' , 'Manuální hlášení:');
	define ('PILOT_FSKEEPERREPORT' , 'FS Keeper hlášení:');
	define ('PILOT_FSACARSREPORT' , 'FS Acars hlášení:');
	define ('PILOT_VAMACARSREPORT' , 'VAM Acars hlášení:');
	define ('PILOT_FLIGTH_MAP' , 'MAPA POSLEDNÍCH DESETI LETŮ');
	define ('PILOT_FLIGTHS' , 'LETY');
	define ('PILOT_FLIGTHS_DEP' , 'Odlet');
	define ('PILOT_FLIGTHS_ARR' , 'Přílet');
	define ('PILOT_FLIGTHS_DATE' , 'Datum');
	define ('PILOT_FLIGTHS_DUR' , 'Trvání');
	define ('PILOT_FLIGTHS_DIST' , 'Vzdálenost');
	define ('PILOT_FLIGTHS_TYPE' , 'Druh letu');
	define ('PILOT_FLIGTHS_VALI' , 'Ověření');
	define ('PILOT_FLIGTHS_DETAILS' , 'Detaily');
	// FSACARS LOG page
	define ('FSACARS_TRACK' , 'SLEDOVÁNÍ LETU');
	define ('FSACARS_PARAMETER' , 'Parametry');
	define ('FSACARS_VALUE' , 'Hodnota');
	define ('FSACARS_DEPARTURE' , 'Odlet:');
	define ('FSACARS_ARRIVAL' , 'Přílet:');
	define ('FSACARS_FLIGHTYPE' , 'Druh letu:');
	define ('FSACARS_FLIGHT_CHARTER' , 'Charterový');
	define ('FSACARS_FLIGHT_REGULAR' , 'Pravidelný');
	define ('FSACARS_STATUS_VALIDATED' , 'Ověřený');
	define ('FSACARS_STATUS_NOVALIDATED' , 'Čeká na ověření');
	define ('FSACARS_STATUS_REJECTED' , 'Odmítnuto');
	define ('FSACARS_STATUS' , 'Stav:');
	define ('FSACARS_DATE' , 'Datum:');
	define ('FSACARS_DURATION' , 'Trvání:');
	define ('FSACARS_PLANETYPE' , 'Typ letadla:');
	define ('FSACARS_FUEL' , 'Palivo:');
	define ('FSACARS_DISTANCE' , 'Vzdálenost:');
	define ('FSACARS_TOUCHDOWN' , 'Hodnocení přistání:');
	define ('FSACARS_LOG' , 'Záznam:');
	// FSKEEPER LOG page
	define ('FSKEEPER_TRACK' , 'SLEDOVÁNÍ LETU');
	define ('FSKEEPER_PILOT' , 'Pilot:');
	define ('FSKEEPER_AIRCRAFT' , 'Letadlo:');
	define ('FSKEEPER_DISTANCE' , 'Vzdálenost:');
	define ('FSKEEPER_DEPARTURE' , 'Odlet:');
	define ('FSKEEPER_ARRIVAL' , 'Přílet:');
	define ('FSKEEPER_TIME' , 'Čas:');
	define ('FSKEEPER_DEPARTURE_SID' , 'SID:');
	define ('FSKEEPER_DEPARTURE_RWY' , 'Odletová trať:');
	define ('FSKEEPER_DEPARTURE_TRANS' , 'Převodní hladina odletu:');
	define ('FSKEEPER_ARRIVAL_SID' , 'STAR:');
	define ('FSKEEPER_ARRIVAL_RWY' , 'Příletová trať:');
	define ('FSKEEPER_ARRIVAL_TRANS' , 'Převodní hladina příletu:');
	define ('FSKEEPER_ZFW' , 'Hmostnost bez paliva:');
	define ('FSKEEPER_BFUEL' , 'Nutno natankovat:');
	define ('FSKEEPER_FFUEL' , 'Spotřebované palivo:');
	define ('FSKEEPER_VALIDATED' , 'Schváleno:');
	define ('FSKEEPER_TYPE' , 'Typ:');
	define ('FSKEEPER_REGISTRY' , 'Registrace letadla:');
	define ('FSKEEPER_FLIGHT_CHARTER' , 'Charter');
	define ('FSKEEPER_FLIGHT_REGULAR' , 'Pravidelný');
	define ('FSKEEPER_STATUS_VALIDATED' , 'Schváleno');
	define ('FSKEEPER_STATUS_NOVALIDATED' , 'Čeká na ověření');
	define ('FSKEEPER_STATUS_REJECTED' , 'Odmítnuto');
	define ('FSKEEPER_PASSENGERS' , 'Pasažéři:');
	define ('FSKEEPER_CARGO' , 'Náklad:');
	define ('FSKEEPER_ALTERNATE' , 'Letiště pro mezipřistání:');
	define ('FSKEEPER_LANDVS' , 'Vertikální rychlost při přistání:');
	define ('FSKEEPER_LANDIAS' , 'Přistávací rychlost:');
	define ('FSKEEPER_SCORE' , 'Skóre letu:');
	define ('FSKEEPER_LANDING_ANALYSIS' , 'ANALÝZA PŘISTÁNÍ');
	define ('FSKEEPER_ROUTE' , 'TRASA');
	define ('FSKEEPER_CRITIQUE' , 'FSKEEPER KRITIKA');
	define ('FSKEEPER_MAPS' , 'MAPY');
	// Pilot options
	define ('PILOT_ACTIONS' , 'AKCE');
	define ('OPTION_MAIL' , 'Vnitřní pošta');
	define ('OPTION_ROUTE_RESERVE' , 'Rezervace letu');
	define ('OPTION_CHANGE_LOCATION' , 'Změnit umístění');
	define ('OPTION_BANK' , 'Mé výdělky');
	define ('OPTION_MANUAL_PIREP' , 'Manuální zápis');
	define ('OPTION_PROFILE' , 'Změnit profil');
	define ('OPTION_STATS' , 'Moje statistiky');
	define ('OPTION_VA_PARAMETER' , 'VA Parametry');
	define ('OPTION_DOWNLOADS' , 'Ke stažení');
	// VA Parameters
	define ('VA_PARAMETERS' , 'VA PARAMETRY');
	define ('PARAMETER' , 'Parametr');
	define ('VALUE' , 'Hodnota');
	define ('COST_SHORT_JUMP' , 'Náklady na změnu umístění (krátké):');
	define ('COST_MEDIUM_JUMP' , 'Náklady na změnu umístění (střední):');
	define ('COST_LONG_JUMP' , 'Náklady na změnu umístění (dlouhé):');
	define ('PLANE_STATUS_MAINTENANCE' , 'Stav letadla v údržbě v procentech:');
	define ('LANDING_RATE_CRASH' , 'Hodnocení přistání považované za havárii:');
	define ('STATUS_LOST_1' , 'Poškození letadla při přistání mezi 0 ft/min and -');
	define ('STATUS_LOST_2' , 'Poškození letadla při přistání mezi -');
	define ('AND_STRING' , ' a -');
	define ('MINIMUN_AIRCRAFT_WEAR' , 'Opotřebení během každého letu:');
	define ('AIRCRAFT_MAINTENANCE_DURATION' , 'Průběh údržby:');
	define ('AIRCRAFT_REPARATION_DURATION' , 'Průběh opravy po havárii:');
	define ('PENALTY_IN_CRASH' , 'Penalizace v případě havárie:');
	define ('SALARY_PER_HOUR_FOR_YOUR_RANK' , 'Hodinová sazba dle hodnosti:');
	define ('SALARY_REDUCTION_CHARTER' , 'Srážka ze mzdy za charterové lety:');
	define ('DAYS' , ' days');
	// My Bank
	define ('FINANCIAL_TRANSACTIONS' , 'FINANČNÍ TRANSAKCE');
	define ('BANK_DATE' , 'Datum');
	define ('BANK_AMOUNT' , 'Částka');
	define ('BANK_REASON' , 'Změna umístění / letu');
	define ('BANK_TOTAL_MONEY' , 'Peníze celkem: ');
	// Book a route
	define ('AVAILABLE_ROUTES' , 'DOSTUPNÉ TRASY');
	define ('ROUTES_BOOKED' , 'MOMENTÁLNĚ REZEROVANÉ LETADLA A TRASY');
	define ('AVAILABLE_AIRCRAFT' , 'DOSTUPNÁ LETADLA');
	define ('BOOK_ROUTE_FLIGHT' , 'Let');
	define ('BOOK_ROUTE_DEPARTURE' , 'Odlet');
	define ('BOOK_ROUTE_ARRIVAL' , 'Přílet');
	define ('BOOK_ROUTE_ALTERNATIVE' , 'Mezipřistání');
	define ('BOOK_ROUTE_TIME_DEP' , 'Čas odletu.');
	define ('BOOK_ROUTE_TIME_ARR' , 'Čas příletu');
	define ('BOOK_ROUTE_INFORMATION' , 'Informace');
	define ('BOOK_ROUTE_ARICRAFT_TYPE' , 'Typ letadla');
	define ('BOOK_ROUTE_ARICRAFT_REG' , 'Registrační  číslo letadla');
	define ('BOOK_ROUTE_ARICRAFT_STATUS' , 'Stav letadla');
	define ('BOOK_ROUTE_ARICRAFT_BOOK' , 'Rezervace letadla');
	define ('BOOK_ROUTE_ARICRAFT_BOOK_MSG' , 'Letadlo rezervováno');
	define ('BOOK_ROUTE_CANCEL_BTN' , ' Zrušit rezervaci');
	define ('BOOK_ROUTE_CANCEL' , ' Zrušit');
	define ('BOOK_ROUTE_CONFIRM' , 'Rezervace proběhla úspěšně. Rezervace bude ukončena automaticky po čtyřiadvaceti hodinách.');
	define ('BOOK_ROUTE_CONFIRMATION' , 'POTVRZENÍ');
	// Change Location
	define ('LOCATION_CHANGE' , 'ZMĚNA UMÍSTĚNÍ');
	define ('LOCATION_CHANGE_LOCATION' , 'Umístění:');
	define ('LOCATION_CHANGE_BTN' , 'Změnit');
	// Manual Pirep
	define ('MANUAL_PIREP' , 'MANUÁLNÍ ZÁZNAM');
	define ('MANUAL_PIREP_DATE' , 'Datum:');
	define ('MANUAL_PIREP_DATE_PH' , 'Vložte datum');
	define ('MANUAL_PIREP_DEP' , 'Odlet:');
	define ('MANUAL_PIREP_DEP_PH' , 'Vložte odlet');
	define ('MANUAL_PIREP_ARR' , 'Přílet:');
	define ('MANUAL_PIREP_ARR_PH' , 'Vložte přílet');
	define ('MANUAL_PIREP_TIME' , 'Doba letu:');
	define ('MANUAL_PIREP_TIME_PH' , 'Vložte dobu letu');
	define ('MANUAL_PIREP_DISTANCE' , 'Vzdálenot:');
	define ('MANUAL_PIREP_DISTANCE_PH' , 'Vložte vzdálenost');
	define ('MANUAL_PIREP_FUEL' , 'Palivo:');
	define ('MANUAL_PIREP_FUEL_PH' , 'Vložte palivo');
	define ('MANUAL_PIREP_AIRCRAFT' , 'Letadlo:');
	define ('MANUAL_PIREP_COMMENT' , 'Poznámky:');
	define ('MANUAL_PIREP_COMMENT_PH' , 'Vložte poznámky');
	define ('MANUAL_PIREP_FLIGHT_TYPE' , 'Typ letu:');
	define ('MANUAL_PIREP_REG' , 'Pravidelný');
	define ('MANUAL_PIREP_CHARTER' , 'Charterový');
	define ('MANUAL_PIREP_SUBMIT_BTN' , 'Odeslat');
	define ('MANUAL_PIREP_EDIT_BTN' , 'Upravit');
	define ('MANUAL_PIREP_CANCEL_BTN' , 'Zrušit');
	define ('MANUAL_PIREP_CONFIRM_BTN' , 'Potvrdit');
	// Flights done by a plane plane_info_public.php
	define ('AIRCRAFT_FLIGHTS' , 'LETY PRO LETADLO S REGISTRAČNÍM ČÍSLEM NA OCASE ');
	define ('AIRCRAFT_FLIGHTS_DATE' , 'Datum');
	define ('AIRCRAFT_FLIGHTS_PILOT' , 'Pilot');
	define ('AIRCRAFT_FLIGHTS_CALLSIGN' , 'Volací znak');
	define ('AIRCRAFT_FLIGHTS_FLIGHT' , 'Let');
	define ('AIRCRAFT_FLIGHTS_DEP' , 'Odlet');
	define ('AIRCRAFT_FLIGHTS_ARR' , 'Přílet');
	define ('AIRCRAFT_FLIGHTS_DISTANCE' , 'Vzdálenost');
	define ('AIRCRAFT_FLIGHTS_FUEL' , 'Palivo');
	// Change location jump_request.php
	define ('CHANGE_LOCATION' , 'ZMĚNIT UMÍSTĚNÍ');
	define ('CHANGE_LOCATION_ICAO' , 'Letiště (ICAO): ');
	define ('CHANGE_LOCATION_SUBMIT_BTN' , 'Změnit');
	// MY PROFILE myprofile.php
	define ('MY_PROFILE' , 'MŮJ PROFIL');
	define ('MY_PROFILE_UPDATE_BTN' , 'Aktualizovat');
	define ('MY_PROFILE_UPDATED' , 'Váš profil byl aktualizován');
	// INTERNAL MAIL mails.php
	define ('MAILS' , 'VNITŘNÍ POŠTA');
	define ('MAILS_NEW' , 'NOVÁ ZPRÁVA');
	define ('MAILS_REPLY' , 'ODPOVĚDI NA ZPRÁVY');
	define ('MAILS_DATE' , 'Datum');
	define ('MAILS_FROM' , 'Od');
	define ('MAILS_SUBJECT' , 'Předmět');
	define ('MAILS_SUBJECT_PH' , 'Vložte předmět');
	define ('MAILS_ACTIONS' , 'Možnosti');
	define ('MAILS_NEW_MESSAGE_LNK' , ' Nová zpráva');
	define ('MAILS_NEW_TO' , 'Komu');
	define ('MAILS_MESSAGE' , 'Zpráva');
	define ('MAILS_MESSAGE_PH' , 'Vložte zprávu');
	define ('MAILS_SEND_BTN' , 'Odeslat');
	// STATISTICS
	define ('STATISTICS' , 'STATISTIKA');
	define ('STATISTICS_PERCENTAGE_REG_VS_CHARTER' , 'PROCENTUÁLNÍ ROZDÍL MEZI CHARTEROVÝMI A PRAVIDELNÝMI LETY');
	define ('STATISTICS_PERCENTAGE_BY_REPORT_TYPE' , 'PROCENTUÁLNÍ ROZDÍL PODLE TYPU HLÁŠENÍ');
	define ('STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE' , 'PROCENTUÁLNÍ ROZDÍL PODLE TYPU LETADLA');
	define ('STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH' , 'POČET LETŮ ZA DEN V AKTUÁLNÍM MĚSÍCI');
	define ('STATISTICS_TOP5_HOUR' , '5 NEJLEPŠÍCH PILOTŮ PODLE HODIN');
	define ('STATISTICS_TOP5_FLIGTH' , '5 NEJLEPŠÍCH PILOTŮ PODLE POČTU LETŮ');
	define ('STATISTICS_TOP5_LANDING' , '5 NEJLÉPE HODNOCENÝCH PŘISTÁNÍ');
	define ('STATISTICS_TOP5_ROUTES' , '5 NEJPOUŽÍVANĚJŠÍCH TRAS');
	define ('STATISTICS_CALLSIGN' , 'Volací znak');
	define ('STATISTICS_PILOT' , 'Pilot');
	define ('STATISTICS_HOURS' , 'Hodiny');
	define ('STATISTICS_FLIGHTS' , 'Lety');
	define ('STATISTICS_TOUCH' , 'Dosednutí (ft/min)');
	define ('STATISTICS_ROUTE' , 'Trasa');
	// strings used index pilot
	define ('INDEX_PILOT_MANUAL' , 'Manuálně');
	define ('INDEX_PILOT_KEEPER' , 'FS Kepper');
	define ('INDEX_PILOT_FSACARS' , 'FS ACARS');
	define ('INDEX_PILOT_REGULAR' , 'Pravidelný');
	define ('INDEX_PILOT_CHARTER' , 'Charterový');
	define ('INDEX_PILOT_COMMENT' , 'Poznámky');
	// User not recognized
	define ('INDEX_NO_USER' , 'Přihlášení ukončeno. Uživatel nebo heslo není platné.');
	// Administration options
	define ('ADM_PARA' , 'VA parametry');
	define ('ADM_HUB_MGR' , 'Hub manažer');
	define ('ADM_FLEET_TYPE_MGR' , 'Typ letadla');
	define ('ADM_FLEET_MGR' , 'Manažer flotily');
	define ('ADM_PILOT_RANK_MGR' , 'Manažer hodností');
	define ('ADM_PILOT_MGR' , 'Manažer pilotů');
	define ('ADM_ROUTE_MGR' , 'Manažer tras');
	define ('ADM_ROUTE_FLEET_MGR' , 'Přiřazení trasy');
	define ('ADM_USER_TYPE_MGR' , 'Typ uživatele');
	define ('ADM_JUMP_MGR' , 'Validátor přemístění');
	define ('ADM_FLIGHT_MGR' , 'Validátor letů');
	define ('ADM_NOTAM_MGR' , 'Notams manažer');
	define ('ADM_EVENT_MGR' , 'Manažer události');
	define ('ADM_EMAIL_MGR' , 'Manažer emailové pošty');
	define ('ADM_LANGUAGES_MGR' , 'Jazykový manažer');
	define ('ADM_ACARS_MGR' , 'ACARS Parameters');
	define ('ADM_NEW_MODULE_MGR' , 'Nový modul');
	// Validate flights
	define ('VALIDATE_FLIGHTS' , 'SCHVALOVÁNÍ LETŮ (VALIDACE)');
	define ('VALIDATE_CALLSIGN' , 'Volací znak');
	define ('VALIDATE_DEPARTURE' , 'Odlet');
	define ('VALIDATE_ARRIVAL' , 'Přílet');
	define ('VALIDATE_DATE' , 'Datum');
	define ('VALIDATE_DURATION' , 'Trvání');
	define ('VALIDATE_DISTANCE' , 'Vzdálenost');
	define ('VALIDATE_TYPE' , 'Typ');
	define ('VALIDATE_LOG' , 'Záznam');
	define ('VALIDATE_REGULAR' , 'Pravidelný');
	define ('VALIDATE_CHARTER' , 'Charterový');
	define ('VALIDATE_ACTION' , 'Možnosti');
	define ('VALIDATE_FLIGHT_REGULAR' , 'Pravidelný let  ');
	define ('VALIDATE_FLIGHT_CHARTER' , 'Charterový let  ');
	// Validate jumps
	define ('VALIDATE_JUMPS' , 'SCHVALOVÁNÍ  PŘEMÍSTĚNÍ (VALIDACE)');
	define ('VALIDATE_JUMP_CALLSIGN' , 'Volací znak');
	define ('VALIDATE_JUMP_DEPARTURE' , 'Odlet');
	define ('VALIDATE_JUMP_ARRIVAL' , 'Přílet');
	define ('VALIDATE_JUMP_DATE' , 'Datum');
	define ('VALIDATE_JUMP_JUMP1' , 'Typ přemístění 1');
	define ('VALIDATE_JUMP_JUMP2' , 'Typ přemístění 2');
	define ('VALIDATE_JUMP_JUMP3' , 'Typ přemístění 3');
	define ('VALIDATE_JUMP' , 'Přemístit ');
	// VAM ACARS
	define ('VAMACARS_SIMACARS' , 'SIMACARS HLÁŠENÍ');
	define ('VAMACARS_FLITGH_DETAILS' , 'FLIGHT DETAILY');
	define ('VAMACARS_LANDANALYSIS' , 'ANALÝZA PŘISTÁNÍ');
	define ('VAMACARS_ROUTE' , 'TRASA');
	define ('VAMACARS_REMARKS' , 'POZNÁMKY');
	define ('VAMACARS_DETAILS' , 'DETAILY');
	define ('VAMACARS_STATUS_VALIDATION' , 'Schválení (Validace)');
	define ('VAMACARS_STATUS_VALIDATED' , 'Schváleno');
	define ('VAMACARS_STATUS_REJECTED' , 'Odmítnuto');
	define ('VAMACARS_STATUS_NOVALIDATED' , 'Čeká na schválení');
	define ('VAMACARS_TYPE' , 'Typ');
	define ('VAMACARS_FLIGHT_CHARTER' , 'Charterový');
	define ('VAMACARS_FLIGHT_REGULAR' , 'Pravidelný');
	define ('VAMACARS_REGISTRY' , 'Registrace');
	define ('VAMACARS_ZFW' , 'Hmotnost bez paliva');
	define ('VAMACARS_BFUEL' , 'Nutno natankovat');
	define ('VAMACARS_FFUEL' , 'Spotřebované palivo');
	define ('VAMACARS_PASSENGERS' , 'Pasažéři');
	define ('VAMACARS_CARGO' , 'Náklad');
	define ('VAMACARS_ALTERNATE1' , 'Mezipřistání');
	define ('VAMACARS_WEIGHTUNIT' , 'Jednotka váhy');
	define ('VAMACARS_DATE' , 'DATUM');
	define ('VAMACARS_DEPARTURE' , 'Odlet');
	define ('VAMACARS_ARRIVAL' , 'Přílet');
	define ('VAMACARS_DURATION' , 'Trvání');
	define ('VAMACARS_DISTANCE' , 'VZDÁLENOST');
	define ('VAMACARS_DEP_TIME' , 'Čas odletu');
	define ('VAMACARS_CRUISE_SPEED' , 'Cestovní rychlost');
	define ('VAMACARS_FLIGHT_LEVEL' , 'Letová hladina');
	define ('VAMACARS_FLIGHT_TYPE' , 'Typ letu');
	define ('VAMACARS_AIRCRAFT_TYPE' , 'Typ letadla');
	define ('VAMACARS_COMMENTS' , 'Poznámky pilota');
	define ('VAMACARS_NETWORK' , 'Síť');
	define ('VAMACARS_DATEDETAIL' , 'Datum');
	define ('VAMACARS_FUELCONSUMED' , 'SPOTŘEBOVANÉ PALIVO');
	define ('VAMACARS_LANDING_PITCH' , 'Rozteč přistní');
	define ('VAMACARS_LANDING_BANK' , 'Podmínky k přistání');
	define ('VAMACARS_LANDING_FLAPS' , 'Přistávací klapky');
	define ('VAMACARS_LANDING_FORCEG' , 'Gravitační síla');
	define ('VAMACARS_LANDING_NAV' , 'Navigační světla');
	define ('VAMACARS_LANDING_LDG' , 'Přistávací světla');
	define ('VAMACARS_LANDING_STR' , 'Záblesková světla');
	define ('VAMACARS_LANDING_BEA' , 'Bodová světla');
	define ('VAMACARS_IAS' , 'Indikovaná rychlost ve vzduchu');
	define ('VAMACARS_GS' , 'Rychlost vůči zemi');
	define ('VAMACARS_ALTITUDE' , 'NADMOŘSKÁ VÝŠKA');
	define ('VAMACARS_FUEL_USED' , 'SPOTŘEBOVANÉ PALIVO');
	define ('VAMACARS_OAT' , 'VENKOVNÍ TEPLOTA VZDUCHU');
	define ('VAMACARS_FLIGHTSTATUS' , 'PRŮBĚH LETU');
	define ('VAMACARS_VAM_MAP' , 'MAPA LETU');
	define ('VAMACARS_EVENTS' , 'UDÁLOST');
	define ('VAMACARS_MAIN_EVENTS' , 'HLAVNÍ UDÁLOSTI');
	define ('VAMACARS_ACARS_DATA' , 'ACARS DATA');
	define ('VAMACARS_HEADING' , 'SMĚR');
	define ('VAMACARS_FLIGHT_STATUS' , 'PRŮBĚH LETU');
	define ('VAMACARS_CRITICAL_EVENTS' , 'KRITICKÉ SITUACE');
	define ('VAMACARS_VAM_CHART' , 'GRAF NADMOŘSKÉ VÝŠKY');
	// Downloads
	define ('DOWNLOADS' , 'KE STAŽENÍ');
	define ('DOWNLOAD_NAME' , 'NÁZEV');
	define ('DOWNLOAD_LINK' , 'ODKAZ');
	// VAM 2.3 BEGIN
	define ('VAMACARS_VALIDATION_COMMENTS' , 'VALIDACE KOMENTÁŘE');
	define ('VAMACARS_VALIDATION_COMMENT' , 'KOMENTÁŘ');
	define ('VAMACARS_FLIGHT_RATING' , 'Letu Hodnocení');
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
	define ('AIRCRAFT_DETAILS' , 'LETADLA PODROBNOSTI');
	define ('AIRCRAFT_DETAILS_PAX' , 'Počet cestujících');
	define ('AIRCRAFT_DETAILS_MAX_RANGE' , 'Maximální rozsah');
	define ('AIRCRAFT_DETAILS_CARGO' , 'Cargo kapacita');
	define ('AIRCRAFT_DETAILS_LENGTH' , 'Délka letadla');
	define ('AIRCRAFT_DETAILS_MZFW' , 'Maximum zero-fuel weight (MZFW)');
	define ('AIRCRAFT_DETAILS_MLW' , 'Maximum landing weight (MLW)');
	define ('AIRCRAFT_DETAILS_MTOW' , 'Maximum takeoff weight (MTOW)');
	define ('AIRCRAFT_DETAILS_CRUISE_SPEED' , 'Cestovní rychlost');
	define ('AIRCRAFT_DETAILS_CEILING' , 'Dostup');
	define ('AIRCRAFT_DETAILS_CREW' , 'Členové posádky');
	define ('HUB_DETAILS' , 'DETAILY HUB');
	define ('HUB_PILOTS' , 'HUB PILOTI');
	define ('HUB_FLEET' , 'HUB FLEET');
	define ('HUB_ROUTES' , 'HUB TRASY');
	define ('HUB_MAP_LOCATION' , 'ROUTES MAP');
	define ('HUB_NAME' , 'Název');
	define ('HUB_WEB' , 'Website');
	define ('HUB_NUM_PILOTS' , 'Počet pilotů');
	define ('HUB_NUM_FLEET' , 'Počet letadel');
	define ('HUB_NUM_ROUTES' , 'Počet tras');
	define ('ADM_TOUR_MODULE_MGR' , 'Tour manažer');
	define ('ADM_FINANTIAL_MODULE_MGR' , 'Finanční manažer');
	define ('OPERATIONS' , 'Operace');
	define ('HUBS' , 'Hubs');
	define ('TOURS' , 'Zájezdy');
	define ('PILOT_RANKS' , 'Pilotní Hodnosti');
	define ('AWARDS' , 'Ocenění');
	define ('TOURS_VA' , 'ZÁJEZDY');
	define ('TOURS_ACTIVE' , 'ACTIVE TOURS');
	define ('TOURS_INACTIVE' , 'INACTIVE TOURS');
	define ('TOUR_DETAILS' , 'DETAILY ZÁJEZDU');
	define ('TOUR_LEGS' , 'TOUR NOHY');
	define ('TOURS_STATUS' , 'Status');
	define ('TOURS_AWARD' , 'Ocenění');
	define ('TOURS_IMAGE' , 'Obraz');
	define ('TOURS_NUM_LEGS' , 'Počet nohy');
	define ('TOURS_LEG_STATUS' , 'Nohy Status');
	define ('TOURS_NUM_LEGS_ACCEPTED' , 'Počet Nohy Přijato');
	define ('TOURS_NUM_LEGS_REPORTED' , 'Počet Nohy Hlášeny');
	define ('TOURS_LEGS_REPORT' , 'Zpráva Leg');
	define ('TOURS_DISTANCE' , 'Odstup');
	define ('TOURS_NAME' , 'Tour');
	define ('TOURS_START_DATE' , 'Datum zahájení');
	define ('TOURS_END_DATE' , 'Datum ukončení');
	define ('TOURS_ROUTE_INFO' , 'Trasa & Komentáře');
	define ('TOURS_ROUTE' , 'Trasa');
	define ('TOURS_COMMENTS' , 'Komentáře');
	define ('TOURS_LEG_REPORT' , 'Zpráva Leg');
	define ('TOURS_VALIDATION' , 'TOURS NOHY VALIDACE');
	define ('TOURS_LEG' , 'Noha');
	define ('PILOT_IMAGEUPLOADER_FORM' , 'Pilot Image Uploader');
	define ('PILOT_AWARDS' , 'PILOT OCENĚNÍ');
	define ('PILOT_TOURS' , 'PILOT TOURS');
	define ('ADM_AWARDS_MGR' , 'Ocenění manažer');
	define ('ADM_AWARDS_PILOR_MGR' , 'Ocenění assignator');
	define ('VAMACARS_LANDINGQNH' , 'Wrong altimeter in Landing');
	define ('VAMACARS_TAKEOFFQNH' , 'Wrong altimeter in Take off');
	define ('LAND_WIND' , 'Landing wind');
	define ('LAND_HDG' , 'Landing heading');
	define ('OPTION_TOUR' , 'Report Tour Leg');
	define ('AWARDS_PANEL' , 'OCENĚNÍ');
	define ('AWARD_NAME' , 'Ocenění');
	define ('AWARD_IMG' , 'Obraz');
	define ('RANK_PANEL' , 'RANKY');
	define ('RANK_IMAGE' , 'Obraz');
	define ('RANK_MIN_HOURS' , 'Pořadí Minimální doba');
	define ('RANK_MAX_HOURS' , 'Pořadí Maximální doba');
	// NEW STATS
	define ('ST_MONTH' , 'Měsíc');
	define ('ST_YEAR' , 'Rok');
	define ('STATISTICS_PILOT_HOURS_YEAR_MONTH' , 'HODIN ZA ROK A MĚSÍC');
	define ('STATISTICS_PILOT_FLIGHTS_YEAR_MONTH' , 'LETŮ ZA ROK A MĚSÍC');
	define ('STATISTICS_FLIGHTS_AIRCRAFT_TYPE' , 'TOP 5 ETY NA TYP LETADLA');
	define ('STATISTICS_TOP5_AIRCRAFTS' , 'TOP 5 ETY NA LETADLA');
	// FINANCE MODULE
	define ('FLIGHT_FINANCES' , 'LET FINANČNÍ ZPRÁVA');
	define ('VA_GLOBAL_FINANCES' , 'VA GLOBAL FINANČNÍ ZPRÁVA');
	define ('COSTS' , 'NÁKLADY');
	define ('INCOME' , 'VÝNOSY');
	define ('INCOME_REGULAR_ROUTES' , 'VÝNOSY REGULAR ROUTES');
	define ('AIRCRAFT_PURCHASE' , 'LETADLA NÁKUP');
	define ('FINANCE_BALANCE' , 'FINANČNÍ BILANCE');
	define ('GLOBAL_FINANCES' , 'Rfinanční Zpráva');
	define ('COSTS_PILOTS_SALARY' , 'COSTS PILOTS SALARY');
	define ('COSTS_AIRCRAFT_REPAIR' , 'COSTS AIRCRAFT REPAIR');
	define ('COSTS_AIRCRAFT_MAINTENANCE' , 'COSTS AIRCRAFT MAINTENANCE');
	// LIVE MAP
	define ('FLIGHT_STAGE' , 'Fáze letu');
	define ('PERC_DONE' , '% Dokončeno');
	define ('PENDING_NM' , 'Čekající NM');
	// VAM 2.6
	define ('NEW_MAIL' , 'You have a new message from other pilot. Review your messages inbox');
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
	define ('TAB_MAIN' , 'Pilot Profile');
	define ('TAB_STATS' , 'Pilot stats');
	define ('TAB_AWARDS' , 'Pilot Awards');
	define ('TAB_TOURS' , 'Pilot Tours');
	define ('TAB_CERTIFICATIONS' , 'Pilot Certifications');
	define ('PILOT_STATS_COUNTRY' , 'PERCENTAGE BY COUNTRY');
	define ('PILOT_STATS_PERC_PLANE' , 'PERCENTAGE BY AIRCRAFT USED');
	define ('PILOT_STATS_PERC_DURATION' , 'PERCENTAGE BY FLIGHT DURATION');
	define ('STATISTICS_NUMBER_FLIGTH_PER_MONTH_CURRENT_YEAR' , 'NUMBER FLIGHTS PER MONTH IN CURRENT YEAR');
	define ('AVG_DURATION' , 'Flight duration average');
	define ('AVG_DISTANCE' , 'Flight distance average');
	define ('AVG_LANDING_VS' , 'Landing vs average');
	define ('LAST_30D_FLIGHT' , 'Last 30 days flights');
?>