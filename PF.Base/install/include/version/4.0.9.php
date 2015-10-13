<?php

return function(Phpfox_Installer $Installer) {
	$Installer->db->query("DELETE FROM " . Phpfox::getT('setting') . " WHERE `module_id`='share' AND `var_name`='share_on_facebook';");
};