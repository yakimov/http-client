<?php

namespace S25\HTTPClient;
use GuzzleHttp\Exception\TooManyRedirectsException as GuzzleTooManyRedirectsException;

class TooManyRedirectsException extends GuzzleTooManyRedirectsException {}