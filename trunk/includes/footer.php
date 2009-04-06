<?php

function htmlend() {
  print "<hr>";
  print "<table><tr>";
  print '<td><a href="http://kontrollsoft.com/kontrollbase/userguide/" target="_self">Kontrollbase User Documentation</a></td></tr>';
  print "<tr><td>page load time: {elapsed_time} seconds</td></tr>
       </body>
     </html>";
}

htmlend();

?>