<?php
return array (
  'findParcelShopLocations' =>
  array (
    'httpMethod' => 'GET',
    'uri' => '/parcel-shop-locations/{countryCode}',
    'responseModel' => 'getResponse',
    'parameters' =>
    array (
      'countryCode' =>
      array (
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
      'limit' =>
      array (
        'description' => 'The maximum number of results returned in the response',
        'type' => 'integer',
        'required' => false,
        'location' => 'query',
        'format' => 'int32',
      ),
      'q' =>
      array (
        'description' => 'Free format location description',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'fuzzy' =>
      array (
        'description' => 'Fuzzy search of location by geolocation',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'street' =>
      array (
        'description' => 'The street name',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'zipCode' =>
      array (
        'description' => 'The postal code',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'city' =>
      array (
        'description' => 'The city',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'houseNumber' =>
      array (
        'description' => 'The housenumber',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'showUnavailable' =>
      array (
        'description' => 'Show parcel shops that are currently unavailable, e.g. due to holidays',
        'type' => 'boolean',
        'required' => false,
        'default' => false,
        'location' => 'query',
      ),
      'latitude' =>
      array (
        'description' => 'Latitude for searching around a location',
        'type' => 'number',
        'required' => false,
        'location' => 'query',
        'format' => 'double',
      ),
      'longitude' =>
      array (
        'description' => 'Longitude for searching around a location',
        'type' => 'number',
        'required' => false,
        'location' => 'query',
        'format' => 'double',
      ),
      'radius' =>
      array (
        'description' => 'Radius in meters to search withing when searching around a latitude and longitude',
        'type' => 'integer',
        'required' => false,
        'location' => 'query',
        'format' => 'int32',
      ),
    ),
    'summary' => 'Find the nearest parcel shop location',
  ),
);
