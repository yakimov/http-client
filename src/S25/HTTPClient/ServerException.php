<?php

namespace S25\HTTPClient;
use GuzzleHttp\Exception\ServerException as GuzzleHttpServerException;

class SeverException extends GuzzleHttpServerException {}