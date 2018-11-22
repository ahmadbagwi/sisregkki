<?php
if (isset($this->session->userdata['logged_in'])) {
	$email = ($this->session->userdata['logged_in']['email']);
	$level = ($this->session->userdata['logged_in']['level']);
}
?>
