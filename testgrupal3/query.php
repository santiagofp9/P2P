<?php

require 'CaptchasDotNet.php';

$captchas = new CaptchasDotNet ('demo', 'secret',
                                '/writable/path/captchasnet-random-strings','3600',
                                'abcdefghkmnopqrstuvwxyz','6',
                                '240','80','000088');
?>

<html>
  <head>
    <title>Sample PHP CAPTCHA Query</title>
  </head>
  <h1>Sample PHP CAPTCHA Query</h1>
  <form method="get" action="check.php">
    <table>
      <tr>
        <td>
          <input type="hidden" name="random" value="GoznngA9b4dgOpsgCLnyQ92KCu24i05cygQmq7p6" />
            Your message:</td><td><input name="message" size="60" />
        </td>
      </tr>
      <tr>
        <td>
          The CAPTCHA password:
        </td>
        <td>
          <input name="password" size="6" />
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
          <img style="border: none; vertical-align: bottom" id="captchas.net" src="http://image.captchas.net/?client=demo&random=RandomZufall" alt="The Captcha image" width="240" height="80"> <a href="javascript:captchas_image_reload('captchas.net')">Reload Image</a>
          <br> <a href="<?= $captchas->audio_url () ?>">Phonetic spelling (mp3)</a>
          <br> <a href="<?= $captchas->audio_url () ?>&language=de">Buchstabieren (mp3)</a>
          <br> <a href="<?= $captchas->audio_url () ?>&language=it">Compitare (mp3)</a>
          <br> <a href="<?= $captchas->audio_url () ?>&language=nl">Spellen (mp3)</a>
          <br> <a href="<?= $captchas->audio_url () ?>&language=fr">Epeler (mp3)</a>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
          <input type="submit" value="Submit" />
        </td>
      </tr>
    </table>
  </form>
</html>