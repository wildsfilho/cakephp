<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success" style="backgroun
d-color: green" onclick="this.classList.add('hidden')"><?= $message ?></div>
