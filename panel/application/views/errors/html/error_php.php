<?php
$root = "http://" . $_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$api_path = substr_replace(str_replace($root, "", $current_url), "", 3);
if ($api_path == 'api') {
    if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE) {
        if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0) {
            $message = array(
                'file' => $error['file'],
                'line' => $error['line'],
                'function' =>  $error['function']
            );
        }
        header('Content-Type: application/json');
        $header = apache_request_headers();
        $ci = get_instance();
        $error_id = $ci->uuid->sid();
        if (isset($header['authorization'])) {
            $user = $ci->user->getUserSidByAuth($header['authorization']);
            $data = array('error_id' => $error_id, 'message' => $message, 'url' => $current_url, 'header' => json_encode($header), 'post_by' => $user['user_sid']);
            $ci->db->insert('error_log', $data);
        }
        echo json_encode(array('status' => false, 'message' => $message, 'url' => $current_url, 'header' => $header));
    }
} else {

    if (!function_exists('http_response_code')) {
        function http_response_code($code = NULL)
        {

            if ($code !== NULL) {

                switch ($code) {
                    case 100:
                        $text = 'Continue';
                        break;
                    case 101:
                        $text = 'Switching Protocols';
                        break;
                    case 200:
                        $text = 'OK';
                        break;
                    case 201:
                        $text = 'Created';
                        break;
                    case 202:
                        $text = 'Accepted';
                        break;
                    case 203:
                        $text = 'Non-Authoritative Information';
                        break;
                    case 204:
                        $text = 'No Content';
                        break;
                    case 205:
                        $text = 'Reset Content';
                        break;
                    case 206:
                        $text = 'Partial Content';
                        break;
                    case 300:
                        $text = 'Multiple Choices';
                        break;
                    case 301:
                        $text = 'Moved Permanently';
                        break;
                    case 302:
                        $text = 'Moved Temporarily';
                        break;
                    case 303:
                        $text = 'See Other';
                        break;
                    case 304:
                        $text = 'Not Modified';
                        break;
                    case 305:
                        $text = 'Use Proxy';
                        break;
                    case 400:
                        $text = 'Bad Request';
                        break;
                    case 401:
                        $text = 'Unauthorized';
                        break;
                    case 402:
                        $text = 'Payment Required';
                        break;
                    case 403:
                        $text = 'Forbidden';
                        break;
                    case 404:
                        $text = 'Not Found';
                        break;
                    case 405:
                        $text = 'Method Not Allowed';
                        break;
                    case 406:
                        $text = 'Not Acceptable';
                        break;
                    case 407:
                        $text = 'Proxy Authentication Required';
                        break;
                    case 408:
                        $text = 'Request Time-out';
                        break;
                    case 409:
                        $text = 'Conflict';
                        break;
                    case 410:
                        $text = 'Gone';
                        break;
                    case 411:
                        $text = 'Length Required';
                        break;
                    case 412:
                        $text = 'Precondition Failed';
                        break;
                    case 413:
                        $text = 'Request Entity Too Large';
                        break;
                    case 414:
                        $text = 'Request-URI Too Large';
                        break;
                    case 415:
                        $text = 'Unsupported Media Type';
                        break;
                    case 500:
                        $text = 'Internal Server Error';
                        break;
                    case 501:
                        $text = 'Not Implemented';
                        break;
                    case 502:
                        $text = 'Bad Gateway';
                        break;
                    case 503:
                        $text = 'Service Unavailable';
                        break;
                    case 504:
                        $text = 'Gateway Time-out';
                        break;
                    case 505:
                        $text = 'HTTP Version not supported';
                        break;
                    default:
                        exit('Unknown http status code "' . htmlentities($code) . '"');
                        break;
                }

                $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

                header($protocol . ' ' . $code . ' ' . $text);

                $GLOBALS['http_response_code'] = $code;
            } else {

                $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);
            }

            return $code;
        }
    }
    echo "";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Error <?= http_response_code() ?></title>
        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.css" integrity="sha512-1HclAOkQSKIyDqJS8azD2GusAZTbtDrChZU0o0UL2+3lDw2KeMLCEYOQzsO2joppy8L+CVKI3SkXBeZb3vUwYA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css" integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    </head>

    <body>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="<?= http_response_code() ?>"><?= http_response_code() ?></div>
                        <p class="lead text-gray-800 mb-2">
                            <?php
                            switch (http_response_code()) {
                                case 100:
                                    echo 'Continue';
                                    break;
                                case 101:
                                    echo 'Switching Protocols';
                                    break;
                                case 200:
                                    echo 'OK';
                                    break;
                                case 201:
                                    echo 'Created';
                                    break;
                                case 202:
                                    echo 'Accepted';
                                    break;
                                case 203:
                                    echo 'Non-Authoritative Information';
                                    break;
                                case 204:
                                    echo 'No Content';
                                    break;
                                case 205:
                                    echo 'Reset Content';
                                    break;
                                case 206:
                                    echo 'Partial Content';
                                    break;
                                case 300:
                                    echo 'Multiple Choices';
                                    break;
                                case 301:
                                    echo 'Moved Permanently';
                                    break;
                                case 302:
                                    echo 'Moved Temporarily';
                                    break;
                                case 303:
                                    echo 'See Other';
                                    break;
                                case 304:
                                    echo 'Not Modified';
                                    break;
                                case 305:
                                    echo 'Use Proxy';
                                    break;
                                case 400:
                                    echo 'Bad Request';
                                    break;
                                case 401:
                                    echo 'Unauthorized';
                                    break;
                                case 402:
                                    echo 'Payment Required';
                                    break;
                                case 403:
                                    echo 'Forbidden';
                                    break;
                                case 404:
                                    echo 'Not Found';
                                    break;
                                case 405:
                                    echo 'Method Not Allowed';
                                    break;
                                case 406:
                                    echo 'Not Acceptable';
                                    break;
                                case 407:
                                    echo 'Proxy Authentication Required';
                                    break;
                                case 408:
                                    echo 'Request Time-out';
                                    break;
                                case 409:
                                    echo 'Conflict';
                                    break;
                                case 410:
                                    echo 'Gone';
                                    break;
                                case 411:
                                    echo 'Length Required';
                                    break;
                                case 412:
                                    echo 'Precondition Failed';
                                    break;
                                case 413:
                                    echo 'Request Entity Too Large';
                                    break;
                                case 414:
                                    echo 'Request-URI Too Large';
                                    break;
                                case 415:
                                    echo 'Unsupported Media Type';
                                    break;
                                case 500:
                                    echo 'Internal Server Error';
                                    break;
                                case 501:
                                    echo 'Not Implemented';
                                    break;
                                case 502:
                                    echo 'Bad Gateway';
                                    break;
                                case 503:
                                    echo 'Service Unavailable';
                                    break;
                                case 504:
                                    echo 'Gateway Time-out';
                                    break;
                                case 505:
                                    echo 'HTTP Version not supported';
                                    break;
                                default:
                                    echo 'Unknown http status code "' . htmlentities($code) . '"';
                                    break;
                            }
                            ?>
                        </p>
                        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                        <div class="col-lg-6 col-sm-12 mx-auto mt-4 text-left">
                            <div class="card bg-dark mb-0">
                                <div class="p-4">
                                    <?= $message ?>
                                </div>
                                <div class="card-footer bg-secondary">
                                    <a type="button" class="btn btn-sm btn-outline-dark" href="https://api.whatsapp.com/send?phone=+6282199838282&text=Error%20Reporting%20---URL:<?= urlencode($current_url . '---MESSAGE:' . $message) ?>" target="_blank">
                                        <i class="fas fa-envelope mr-2"></i>Report Error</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-5">
                            <button class="btn btn-outline-primary " onclick="window.history.back()"><i class="fas fa-long-arrow-alt-left mr-2"></i> Back</button>
                            <button class="btn btn-primary " onclick="window.location.reload()"><i class="fas fa-sync-alt mr-2"></i>Try Again</button>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    </body>

    <footer class="footer text-center">
        <strong class="text-gray-600 mb-0">ERROR REPORTING </strong>(<a href="#">https://pasbe.id</a>)
        <p class="text-gray-400">Please report errors, so that the application becomes better! </p>
        <hr>
    </footer>

    </html>

<?php } ?>