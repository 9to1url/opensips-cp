<?php
/*
 * Copyright (C) 2011 OpenSIPS Project
 *
 * This file is part of opensips-cp, a free Web Control Panel Application for 
 * OpenSIPS SIP server.
 *
 * opensips-cp is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * opensips-cp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

require_once("../../../common/forms.php");
 if (isset($form_error)) {
                          echo(' <tr align="center">');
                          echo('  <td colspan="2" class="dataRecord"><div class="formError">'.$form_error.'</div></td>');
                          echo(' </tr>');
                         }
                         

?> 

<form action="<?=$page_name?>?action=add_statistic&name=<?=$stat_name?>" method="post">
<table width="400" cellspacing="2" cellpadding="2" border="0">
 <tr align="center">
	 <?php   
		form_generate_input_textarea("Input:", null, "input_id", "y", "", null, null);

if (!$_SESSION['read_only']) {
?>
  <tr>
   <td colspan="3">
    <table cellspacing=20>
      <tr>
        <td class="dataRecord" align="right" width="50%"><input type="submit" name="save" value="Save" class="formButton"></td>
		<td class="dataRecord" align="left" width="50%"><?php print_back_input(); ?></td>
      </tr>
    </table>
  </tr>
<?php
 }
?>
  </table>

</form>

