<?php

namespace Subugoe\GermaniasacraUtils\Strings;

class SolrFields
{
    const TYPE = 'type';
    const ID = 'id';
    const NAME = 'name';
    const VALUE = 'value';

    const TYPES = [
        'MONASTERY' => 'monastery',
        'MONASTERY_ORDER' => 'monasteryOrder',
        'MONASTERY_STATUS' => 'monasteryStatus',
        'DIOCESE' => 'diocese',
        'ORDER' => 'order',
        'LOCATION' => 'location',
        'PERSON' => 'person',
        'LITERATURE' => 'literature',
    ];

    // Monastery
    const MONASTERY_NAME = ColumnNames::MONASTERY_NAME;
    const GSN_ID = ColumnNames::GSN_ID;
    const DATE_CREATED = ColumnNames::DATE_CREATED;
    const CREATED_BY_USER = ColumnNames::CREATED_BY_USER;
    const EDITING_STATUS = 'editing_status';
    const NOTE = ColumnNames::NOTE;
    const PATROCINIUM = ColumnNames::PATROCINIUM;
    const SELECTION = ColumnNames::SELECTION;
    const PROCESSING_STATUS = ColumnNames::PROCESSING_STATUS;
    const GS_PERSONS = ColumnNames::GS_PERSONS;
    const SELECTION_CRITERIA = ColumnNames::SELECTION_CRITERIA;
    const LAST_CHANGE = ColumnNames::LAST_CHANGE;
    const CHANGED_BY_USER = ColumnNames::CHANGED_BY_USER;
    const FOUNDER = ColumnNames::FOUNDER;
    const LOCATIONS = 'locations';
    const ORDERS = 'orders';
    const DIOCESES = 'dioceses';
    const LITERATURE = 'literature';
    const PERSONS = 'persons';
    const VOLUMES = 'volumes';
    const ORDER_BEGIN_TPQ_TOTAL = 'order_begin_tpq_total';
    const ORDER_END_TPQ_TOTAL = 'order_end_tpq_total';

    const GENDER_FACET = 'gender_facet';
    const DIOCESE_FACET = 'diocese_facet';
    const ORDER_FACET = 'order_facet';
    const PLACE_NAMES = 'place_names';
    const URL_VALUES = 'url_values';
    const COUNTRY_NAMES = 'country_names';
    const PERSON_LASTNAMES = 'person_lastnames';

    // Monastery Locations
    const MONASTERY_LOCATION_ID = 'monastery_location_id';
    const LOCATION_BEGIN_TAQ = ColumnNames::LOCATION_BEGIN_TAQ;
    const LOCATION_BEGIN_TPQ = ColumnNames::LOCATION_BEGIN_TPQ;
    const LOCATION_BEGIN_NOTE = ColumnNames::LOCATION_BEGIN_NOTE;
    const LOCATION_END_TAQ = ColumnNames::LOCATION_END_TAQ;
    const LOCATION_END_TPQ = ColumnNames::LOCATION_END_TPQ;
    const LOCATION_END_NOTE = ColumnNames::LOCATION_END_NOTE;
    const LONGITUDE = ColumnNames::LONGITUDE;
    const LATITUDE = ColumnNames::LATITUDE;
    const LOCATION_NAME = ColumnNames::LOCATION_NAME;
    const MAIN_LOCATION = ColumnNames::MAIN_LOCATION;
    const PLACES = 'places';
    const RELOCATED = ColumnNames::RELOCATED;

    // Places
    const PLACE_NAME = ColumnNames::PLACE_NAME;
    const SELECTED = ColumnNames::SELECTED;
    const DESERTED_PLACE = ColumnNames::DESERTED_PLACE;
    const GEMEINDE = ColumnNames::GEMEINDE;
    const KREIS = ColumnNames::KREIS;
    const GEONAMES_ID = ColumnNames::GEONAMES_ID;
    const WIKIDATA_QID = ColumnNames::WIKIDATA_QID;
    const COUNTRY_NAME = ColumnNames::COUNTRY_NAME;
    const GERMANY = ColumnNames::GERMANY;

    // Dioceses
    const DIOCESE = ColumnNames::DIOCESE;
    const ECCLESIASTICAL_PROVINCE = ColumnNames::ECCLESIASTICAL_PROVINCE;
    const NOTE_DIOCESE = ColumnNames::NOTE_DIOCESE;
    const DIOCESE_STATUS = ColumnNames::DIOCESE_STATUS;
    const SHAPEFILE = ColumnNames::SHAPEFILE;
    const BISHOPRIC_SEAT = ColumnNames::BISHOPRIC_SEAT;
    const DATE_OF_FOUNDING = ColumnNames::DATE_OF_FOUNDING;
    const DATE_OF_DISSOLUTION = ColumnNames::DATE_OF_DISSOLUTION;
    const COMMENT_AUTHORITY_FILE = ColumnNames::COMMENT_AUTHORITY_FILE;
    const GATZ_PAGES = ColumnNames::GATZ_PAGES;
    const ALTES_REICH = ColumnNames::ALTES_REICH;
    const DIOCESE_GS = ColumnNames::DIOCESE_GS;
    const NOTE_BISHOPRIC_SEAT = ColumnNames::NOTE_BISHOPRIC_SEAT;
    const ALT_LABELS = ColumnNames::ALT_LABELS;
    const EXTERNAL_URLS = ColumnNames::EXTERNAL_URLS;

    // Monastery orders
    const MONASTERY_ORDERS = 'monastery_orders';
    const MONASTERY_ORDER_ID = 'monastery_order_id';
    const MONASTERY_STATUS = ColumnNames::MONASTERY_STATUS;
    const ORDER_BEGIN_TPQ = ColumnNames::ORDER_BEGIN_TPQ;
    const ORDER_BEGIN_TAQ = ColumnNames::ORDER_BEGIN_TAQ;
    const ORDER_END_TPQ = ColumnNames::ORDER_END_TPQ;
    const ORDER_END_TAQ = ColumnNames::ORDER_END_TAQ;
    const ORDER_BEGIN_NOTE = ColumnNames::ORDER_BEGIN_NOTE;
    const ORDER_END_NOTE = ColumnNames::ORDER_END_NOTE;
    const DISPLAY_ORDER = ColumnNames::DISPLAY_ORDER;
    const MAIN_ORDER = ColumnNames::MAIN_ORDER;

    // Orders
    const ORDER_NAME = ColumnNames::ORDER_NAME;
    const ORDER_ABBREVIATION = ColumnNames::ORDER_ABBREVIATION;
    const SYMBOL = ColumnNames::SYMBOL;
    const GENDER = ColumnNames::GENDER;
    const IMAGEFILE = ColumnNames::IMAGEFILE;
    const COMMENT_ORDER = ColumnNames::COMMENT_ORDER;
    const NOTE_ORDER = ColumnNames::NOTE_ORDER;
    const LTHK = ColumnNames::LTHK;

    // Volumes
    const GS_VOLUME_PAGES = ColumnNames::GS_VOLUME_PAGES;
    const VOLUME_NR = ColumnNames::VOLUME_NR;
    const HANDLE = ColumnNames::HANDLE;
    const FINDPAGE = ColumnNames::FINDPAGE;
    const SHORT_TITLE_FACET = ColumnNames::SHORT_TITLE_FACET;

    // Literature
    const CITEKEY = ColumnNames::CITEKEY;
    const TYPELT = ColumnNames::TYPELT;
    const EXTERNAL_ID = ColumnNames::EXTERNAL_ID;
    const SHORT_TITLE = ColumnNames::SHORT_TITLE;
    const RI_OPAC = ColumnNames::RI_OPAC;
    const DETAIL = ColumnNames::DETAIL;

    // Monastery External Urls
    const URL_TYPE = ColumnNames::URL_TYPE;
    const URL_NAME_FORMATTER = ColumnNames::URL_NAME_FORMATTER;
    const URL_FORMATTER = ColumnNames::URL_FORMATTER;
    const URL_VALUE_EXAMPLE = ColumnNames::URL_VALUE_EXAMPLE;

    const URL_TYPE_ID = ColumnNames::URL_TYPE_ID;
    const URL_VALUE = ColumnNames::URL_VALUE;

    // Monastery Alt Labels
    const ALT_LABEL_MONASTERY = ColumnNames::ALT_LABEL_MONASTERY;
    const DISPLAYED = ColumnNames::DISPLAYED;

    // Diocese Alt Labels
    const ALT_LABEL_DIOCESE = ColumnNames::ALT_LABEL_DIOCESE;
    const LANG = ColumnNames::LANG;
    const RESOURCE = ColumnNames::RESOURCE;

    // Persons
    const PERSON_FIRSTNAME = ColumnNames::PERSON_FIRSTNAME;
    const PERSON_LASTNAME = ColumnNames::PERSON_LASTNAME;
    const PERSON_NAME_ALTERNATIVES = ColumnNames::PERSON_NAME_ALTERNATIVES;
    const PERSON_GSO = ColumnNames::PERSON_GSO;
    const PERSON_GND = ColumnNames::PERSON_GND;
    const PERSON_DESIGNATION = ColumnNames::PERSON_DESIGNATION;
    const PERSON_DESIGNATION_PLURAL = ColumnNames::PERSON_DESIGNATION_PLURAL;
    const PERSON_NOTE = ColumnNames::PERSON_NOTE;
    const PERSON_FROM_VERBAL = ColumnNames::PERSON_FROMVERBAL;
    const PERSON_FROM = ColumnNames::PERSON_FROM;
    const PERSON_TO_VERBAL = ColumnNames::PERSON_TOVERBAL;
    const PERSON_TO = ColumnNames::PERSON_TO;
    const PERSON_OFFICE_ID = ColumnNames::PERSON_OFFICE_ID;

    // Common
    const URL = ColumnNames::URL;
    const FULL_TITLE = ColumnNames::FULL_TITLE;
    const DIOCESE_ID = ColumnNames::DIOCESE_ID;
    const COMMENT = ColumnNames::COMMENT;
    const SORT = ColumnNames::SORT;
    const SUGGESTER_LOCATION = 'suggester_location';
    const SUGGESTER_PATROCINIUM = 'suggester_patrocinium';
    const SUGGESTER_NUMBER = 'suggester_number';
    const SUGGESTER_COUNTRY = 'suggester_country';
    const SUGGESTER_PERSON = 'suggester_person';
}
