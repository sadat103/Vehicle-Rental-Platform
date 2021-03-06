<?php
class Email
{
  private $email_subject;
  private $customer_id;
  private $verification_code;
  private $message_date;
  private $message_time;
  private $email_body;
  private $url;
  private $url_params;
  private $verification_link;
  private $message_title;
  private $customer_email;
  private $isCustomer;

  function __construct($c_id, $c_email, $code, $isCustomer)
  {
    $this->customer_id = $c_id;
    $this->customer_email = $c_email;
    $this->verification_code = $code;



    date_default_timezone_set("Asia/Dhaka");

    $this->message_date = date("Y-m-d");
    $this->message_time = date("H:i:s a");
    $this->email_subject = "Account verification for your account with MUS Hire Ltd";
    $this->message_title = "Account verification";


    if ($isCustomer == 1) {
      $this->url = "http://localhost/VRP/view/verification.php";
      $this->url_params =  array(
        'customer_id' => $this->customer_id,
        'code' => $this->verification_code
      );
    } else {
      $this->url = "http://localhost/VRP/view/company/verification.php";
      $this->url_params =  array(
        'company_id' => $this->customer_id,
        'code' => $this->verification_code
      );
    }

    $this->verification_link = $this->url . "?" . http_build_query($this->url_params);

    $this->email_body = "<html xmlns=\"http://www.w3.org/1999/xhtml\">
        <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Untitled Document</title>
        </head>
        <body style=\"text-align:center;color:white;\">
        <table style=\"margin: auto;\" width=\"50%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
          <tr>
            <td align=\"center\" valign=\"top\" bgcolor=\"#E44F2B\" style=\"background-color:#E44F2B;\"><br>
            <br>
            <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
              <tr>
                <td align=\"center\" valign=\"top\" bgcolor=\"#E44F2B\" style=\"background-color:#E44F2B; padding:6px;\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"10\" style=\"margin-bottom:10px;\">
                  <tr>
                    <!-- <td align=\"left\" valign=\"top\"><img src=\"images/logo.png\" width=\"298\" height=\"67\" style=\"display:block;\"></td> -->
                    <td style=\"text-align:center;\" align=\"left\" valign=\"top\"><h1 style=\"color:white;font-size:75px;\"><span style=\"color:#FFFFFF;\">MUS</span> Hire Ltd</h1></td>
                  </tr>
                </table>
                  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" style=\"margin-bottom:20px;\">
                    <tr>
                      <td width=\"50%\" align=\"left\" valign=\"top\" bgcolor=\"#000000\" style=\"background-color:#000000; color:#ffffff; font-family:Verdana, Geneva, sans-serif; font-size:11px;\">&nbsp;&nbsp; {$this->message_date} </td>
                      <td align=\"right\" valign=\"top\" bgcolor=\"#000000\" style=\"background-color:#000000; color:#ffffff; font-family:Verdana, Geneva, sans-serif; font-size:11px;\">{$this->message_time}</td>
                    </tr>
                  </table>
                  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"10\" style=\"margin-bottom:10px;\">
                    <tr>
                      <td align=\"left\" valign=\"top\" style=\"color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:38px;\">{$this->message_title}</td>
                      </tr>
                  </table>
                  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:10px;\">
                    <tr>
                      <!-- <td align=\"center\" valign=\"top\"><img src=\"images/divider1.png\" width=\"587\" height=\"6\" style=\"display:block;\"></td> -->
                      <hr style=\"background-color: dimgrey;color: dimgrey; border: solid 1px dimgrey;height: 5px; width: 100%; \"  >
                    </tr>
                  </table>
                  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"10\" style=\"margin-bottom:10px;\">
                    <tr>
                      <td align=\"left\" valign=\"top\" style=\"color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:150%;\">{$this->verification_link}</td>
                      </tr>
                  </table>
                </td>
              </tr>
              <!-- <tr>
                <td align=\"center\" valign=\"top\" bgcolor=\"#E44F2B\" style=\"background-color:#E44F2B; padding:6px;\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                  <tr>
                    <td width=\"195\" align=\"left\" valign=\"top\"><table width=\"160\" border=\"0\" cellpadding=\"0\" cellspacing=\"7\" style=\"margin-bottom:10px;\">
                      <tr>
                        <td align=\"left\" valign=\"top\" style=\"font-family:Arial, Helvetica, sans-serif; color:#000000; font-size:13px;\"><div style=\"font-size:16px;\"><b>In This Issue</b></div>
                          <div><a href=\"#\" style=\"color:#000000;\">Article Headline 1</a><br>
                            <a href=\"#\" style=\"color:#000000;\">Article Headline 2</a><br>
                            <a href=\"#\" style=\"color:#000000;\">Article Headline 3</a>
                            <br>
                            <br>
                          </div></td>
                      </tr>
                    </table>
                      <table width=\"152\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:10px;\">
                      <tr>
                        <td align=\"center\" valign=\"top\"><img src=\"images/right_divider.png\" width=\"152\" height=\"10\" style=\"display:block;\" /></td>
                      </tr>
                    </table>
                      <table width=\"160\" border=\"0\" cellpadding=\"0\" cellspacing=\"7\" style=\"margin-bottom:10px;\">
                        <tr>
                          <td align=\"left\" valign=\"top\" style=\"font-family:Arial, Helvetica, sans-serif; color:#000000; font-size:13px;\"><div style=\"font-size:16px;\"><b>Quick Links</b></div>
                            <div><a href=\"#\" style=\"color:#000000;\">About Our Company</a><br>
        <a href=\"#\" style=\"color:#000000;\">Join Our mailing list</a><br>
        <a href=\"#\" style=\"color:#000000;\">News Archive</a><br>
        <a href=\"#\" style=\"color:#000000;\">Our Services</a><br>
        <br>
                            </div></td>
                        </tr>
                      </table>
                      <table width=\"152\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:10px;\">
                        <tr>
                          <td align=\"center\" valign=\"top\"><img src=\"images/right_divider.png\" width=\"152\" height=\"10\" style=\"display:block;\" /></td>
                        </tr>
                    </table>
                      <table width=\"160\" border=\"0\" cellpadding=\"0\" cellspacing=\"7\" style=\"margin-bottom:10px;\">
                        <tr>
                          <td align=\"left\" valign=\"top\" style=\"font-family:Arial, Helvetica, sans-serif; color:#000000; font-size:13px;\"><div style=\"font-size:16px;\"><b>Featured Article </b></div>
                            <div><img src=\"images/pic003.jpg\" width=\"144\" height=\"94\"><br>
                              Lorem tempor venenatis eros. Aliquam sed velit vitae nibh pulvinar iaculis. Aenean hendrerit, lorem eu luctus cursus, sapien justo auctor ligula, id bibendum lorem leo quis leo. Suspendisse sit amet aliquam orci. Aliquam erat volutpat. Aliquam erat volutpat. Nunc ac justo enim. Morbi eleifend feugiat turpis non placerat. Etiam sed tellus ac lectus lacinia molestie nec eu nisl. Pellentesque mattis luctus ultrices.</div></td>
                        </tr>
                      </table></td>
                    <td align=\"left\" valign=\"top\"><table width=\"97%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"7\" style=\"margin-bottom:10px;\">
                      <tr>
                        <td width=\"100%\" align=\"left\" valign=\"top\" style=\"font-family:Arial, Helvetica, sans-serif; color:#000000; font-size:13px;\">
                        <div style=\"font-size:22px;\">Lorem ipsum adipiscing elit. Vestibulum magna enim</div>
        <div><br>
          Tempor venenatis eros. Aliquam sed velit vitae nibh pulvinar iaculis. Aenean hendrerit, lorem eu luctus cursus, sapien justo auctor ligula, id bibendum lorem leo quis leo. Suspendisse sit amet aliquam orci. Aliquam erat volutpat. Aliquam erat volutpat. Nunc ac justo enim. Morbi eleifend feugiat turpis non placerat. Etiam sed tellus ac lectus lacinia molestie nec eu nisl. Pellentesque mattis luctus ultrices. Suspendisse pretium feugiat ipsum nec dapibus. Aenean bibendum vestibulum scelerisque. Curabitur tempus pharetra<br>
          <br>
        </div></td>
                      </tr>
                    </table>
                      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:10px;\">
                        <tr>
                          <td align=\"center\" valign=\"top\"><img src=\"images/right_divider.png\" width=\"374\" height=\"10\" style=\"display:block;\"></td>
                        </tr>
                      </table>
                      <table width=\"97%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"7\" style=\"margin-bottom:10px;\">
                        <tr>
                          <td align=\"left\" valign=\"top\" style=\"font-family:Arial, Helvetica, sans-serif; color:#000000; font-size:13px;\"><div style=\"font-size:16px;\"><b>New Products</b></div>
                            <div>
                              <br>
                              <table width=\"80%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                  <td width=\"50%\" align=\"left\" valign=\"middle\"><img src=\"images/pic001.jpg\" width=\"118\" height=\"118\"></td>
                                  <td align=\"left\" valign=\"middle\"><img src=\"images/pic002.jpg\" width=\"119\" height=\"119\"></td>
                                </tr>
                              </table>
                              <br>
                              Lorem ipsum tempor venenatis eros. Aliquam sed velit vitae nibh pulvinar iaculis. Aenean hendrerit, lorem eu luctus cursus, sapien justo auctor ligula, id bibendum lorem leo quis leo. Suspendisse sit amet aliquam orci. Aliquam erat volutpat. Aliquam erat volutpat. Nunc ac justo enim.
                              <br>
                              <a href=\"#\" style=\"color:#000000;\">read more</a><br>
                              <br>
                            </div></td>
                        </tr>
                      </table>
                      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:10px;\">
                        <tr>
                          <td align=\"center\" valign=\"top\"><img src=\"images/right_divider.png\" width=\"374\" height=\"10\" style=\"display:block;\"></td>
                        </tr>
                      </table>
                      <table width=\"97%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"7\" style=\"margin-bottom:10px;\">
                        <tr>
                          <td align=\"left\" valign=\"top\" style=\"font-family:Arial, Helvetica, sans-serif; color:#000000; font-size:13px;\"><div style=\"font-size:16px;\"><b>Article Headline</b></div>
                            <div><br>
                              Lorem ipsum tempor venenatis eros. Aliquam sed velit vitae nibh pulvinar iaculis. Aenean hendrerit, lorem eu luctus cursus, sapien justo auctor ligula, id bibendum lorem leo quis leo. Suspendisse sit amet aliquam orci. Aliquam erat volutpat. Aliquam erat volutpat. Nunc ac justo enim.<br>
                              <a href=\"#\" style=\"color:#000000;\">read more</a><br>
                            </div></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr> -->
            </table>
            <br>
            <br></td>
          </tr>
        </table>
        </body>
        </html>
        ";
  }

  function sendEmail()
  {
    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Additional headers
    // $headers[] = 'To: Utshaw <farhan.tanvir.utshaw@gmail.com>';
    // $headers[] = 'From: Birthday Reminder <birthday@example.com>';
    // $headers[] = 'Cc: birthdayarchive@example.com';
    // $headers[] = 'Bcc: birthdaycheck@example.com';

    // Mail it
    mail($this->customer_email, $this->email_subject, $this->email_body, implode("\r\n", $headers));
  }
}
