<?php
/**
 * XSS対策　エスケープ処理
 * 
 * @param string $str 対象の文字列
 * @return string  処理された文字列
 */
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * CSRF対策　エスケープ処理
 * @param void
 * @return string $csrf_token
 */
function setToken() {
    //トークンを生成
    //フォームからトークンを送信
    // 送信後の画面でトークンを照会
    // トークンを削除 POSTでは絶対入れたい
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $csrf_token;

    return $csrf_token;
}
