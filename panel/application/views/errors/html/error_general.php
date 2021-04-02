<?php
header('Content-Type: application/json');
if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE) {
    foreach (debug_backtrace() as $error) {
        if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0) {
            $message = array('message' => 'some error occurred',
                'function' => $error['function']) ;
        }
    }
}
$header = apache_request_headers();
$ci = get_instance();
$error_id = $ci->uuid->sid();
$user = $ci->user->getUserSidByAuth($header['authorization']);
$data = array('error_id' => $error_id, 'message' => $message, 'url' => $current_url, 'header' => json_encode($header), 'post_by' => $user['user_sid']);
$ci->db->insert('error_log', $data);
echo json_encode(array('status' => false, 'message' => $message, 'url' => $current_url, 'header' => $header));