<?php include_once 'header.php'; ?>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-body text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="415" src="https://www.youtube.com/embed/32E7dReissc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

	<!--Two Default Section-->
    <section class="about-section">
        <div class="auto-container">
            
            <div class="row clearfix">

            <div class="about-column column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner">
                        <h3 class="title text-primary text-center"><?=$_localize['guid_heading'][$_SESSION['lang']]?></h3>
                        <br/>
                        <br/>
                        <div class="text">
                            <div class="table-responsive">

                              <?PHP
                              if($_SESSION['lang'] == 'en'){
                                ?>
                                <table class="table table-bordered" dir="ltr">
  <tbody>
    <tr style="height:7.5pt">
      <td width="33" rowspan="2" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">the number</font></font></span>
          </b>
        </p>
      </td>
      <td width="192" rowspan="2" valign="top" style="width:144.15pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">stages</font></font></span>
          </b>
        </p>
      </td>
      <td width="121" rowspan="2" style="width:90.8pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:#00B050"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Type of machinery or equipment</font></font></span>
          </b>
        </p>
      </td>
      <td width="79" rowspan="2" style="width:59.45pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:#00B050"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The shape of the machine or equipment</font></font></span>
          </b>
        </p>
      </td>
      <td width="179" rowspan="2" style="width:134.35pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-EG" style="font-size:13.0pt;color:#00B050"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Operation form</font></font></span>
          </b>
        </p>
      </td>
      <td width="82" colspan="2" valign="top" style="width:61.7pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Production time (sec.</font></font></span>
          </b>
        </p>
      </td>
      <td width="100" rowspan="2" valign="top" style="width:100.9pt;border:solid windowtext 1.0pt;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Video production stages</font></font></span>
          </b>
        </p>
      </td>
    </tr>
    <tr style="height:7.5pt">
      <td width="45" valign="top" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">second</font></font></span>
          </b>
        </p>
      </td>
      <td width="37" valign="top" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">minute</font></font></span>
          </b>
        </p>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left: solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ironing a gray reflective cloth that is attached to the chest</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">industrial iron</font></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="67" height="48" src="images/daleel/image117.jpg">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:ltr;unicode-bidi:embed">
          <img width="68" height="58" src="images/daleel/image118.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left: solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">42</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Qmu6KM8xMQQ">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing the reflective cloth in gray on the chest of the workers' overalls</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image119.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR">
            <img width="79" height="31" src="images/daleel/image120.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSat</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Avd-tHrdh1Y">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Overlock stitching for some jumpsuit tops</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="AR-EG" style="font-size:13.0pt"><font style="vertical-align: inherit;">3 threads overlock </font></span><span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;">machine</font></span></font><span lang="AR-EG" style="font-size:13.0pt"><font style="vertical-align: inherit;"></font></span>
          <span lang="AR-EG" style="font-size:13.0pt"></span>
        </p>
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 Thread Surgery Machine</font></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR">
            <img width="64" height="49" src="images/daleel/image121.jpg" alt="JACK E-04 3 Thread Overlock (Direct Drive) Industrial Sewing Machine 5051146779829 |  eBay">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="LTR" style="text-align:left;direction:ltr;unicode-bidi:
  embed">
          <img width="162" height="48" src="images/daleel/image122.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EFd</font></font></p>
      </td>
      <td width="45" style="width:33.95pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">41</font></font></span>
        </p>
      </td>
      <td width="37" style="width:27.75pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/n9G-6NCjChY">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
      
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reinforcing the pockets with a rope or string ( </font></font></span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cord .).</font></font></span>
          <span dir="ltr"></span>
          <span lang="AR-SA" style="font-size:13.0pt">
            <span dir="ltr"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image123.jpg">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="175" height="51" src="images/daleel/image124.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">OSb</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/B3GQKaJRjpc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Install fasteners for all pockets</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image123.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image125.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/uznD002oBlo">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The top connected with the bottom of the overalls</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image123.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image126.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/EBPbRd9GBJU">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ironing the chest pockets fabric</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">industrial iron</font></font></span>
        </p>
      </td>
      <td width="79" valign="top" style="width:59.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="67" height="48" src="images/daleel/image127.jpg">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="68" height="58" src="images/daleel/image128.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/1RQvsXBG4mM">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chest pocket stitching on the top of the overalls</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image129.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR">
            <img width="79" height="31" src="images/daleel/image130.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSat</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/adHkziQNT28">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The side pocket has arrived</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image131.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image132.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/qzSgGgbGb8I">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Knitting the side pocket of the workers' overalls</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image133.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image134.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/VpTqBvd3MGA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Overstitching at the edges of the side pocket</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Overedge 3 Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" valign="top" style="width:59.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="64" height="48" src="images/daleel/image135.jpg">
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR">
            <img width="58" height="31" src="images/daleel/image136.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EFd</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/CyTkapafmaw">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">How to install the velcro for the flap (flap) of the pocket cover</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image133.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR">
            <img width="59" height="36" src="images/daleel/image137.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSaw</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15th</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/E3aWAvVQBK0">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Equip ( </font></font></span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Flaps</font></font></span>
          <span dir="ltr"></span>
          <span lang="AR-SA" style="font-size:13.0pt">
            <span dir="ltr"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">) Flap (flap) foldable pocket</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">manually</font></font></span>
        </p>
      </td>
      <td width="79" valign="top" style="width:59.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="58" height="60" src="images/daleel/image138.jpg" alt="Hand Icon On White Background Vector Stock Vector (Royalty Free) 1662545224">
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="58" height="60" src="images/daleel/image138.jpg" alt="Hand Icon On White Background Vector Stock Vector (Royalty Free) 1662545224">
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Bem9UVzIVRA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing pockets, linings and flap for the back pockets of the jumpsuit</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image133.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR">
            <img width="59" height="36" src="images/daleel/image139.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSaw</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/3dlOFXjfgEw">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15th</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing ( </font></font></span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Flaps</font></font></span>
          <span dir="ltr"></span>
          <span lang="AR-SA" style="font-size:13.0pt;color:black">
            <span dir="ltr"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">) for the back pocket and the large cargo pocket</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image140.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR">
            <img width="59" height="36" src="images/daleel/image141.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSaw</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/wmKXjX2IXKQ">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preparing the front part that covers the zipper of the jumpsuit</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">manually</font></font></span>
        </p>
      </td>
      <td width="79" valign="top" style="width:59.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="58" height="60" src="images/daleel/image142.jpg" alt="Hand Icon On White Background Vector Stock Vector (Royalty Free) 1662545224">
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="58" height="60" src="images/daleel/image142.jpg" alt="Hand Icon On White Background Vector Stock Vector (Royalty Free) 1662545224">
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/LuiPBrs9FNA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Back stitching for workers' overalls</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image143.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image144.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/BsdAV1CnTyI">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing the </font></font></span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zipper Fly</font></font></span>
          <span dir="ltr"></span>
          <span lang="AR-SA" style="font-size:13.0pt;color:black">
            <span dir="ltr"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image145.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR">
            <img width="50" height="36" src="images/daleel/image146.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSe</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/BsdAV1CnTyI">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Back stitching in the shape of a letter ( </font></font></span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T .).</font></font></span>
          <span dir="ltr"></span>
          <span lang="AR-SA" style="font-size:13.0pt">
            <span dir="ltr"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image147.jpg">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="175" height="45" src="images/daleel/image148.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">OSa</font></font></span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/xFy_NpLTQbg">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Back (seat) stitching for jumpsuits</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image149.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image150.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/V_zgZgr7EZY">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="ltr">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rear Overalls Parts Connected</font></font></span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
          <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image151.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image152.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/5VrumT898pc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>

    

  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fabricate and sew the edges of the pockets</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image153.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="75" height="37" src="images/daleel/image154.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EFm</font></font></span>
      </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/xSOKML98-g8">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23a</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iron the back pockets and the front parts of the overalls</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">industrial iron</font></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="67" height="48" src="images/daleel/image155.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="68" height="58" src="images/daleel/image156.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
      </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Ps5SuI5Kryc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23b</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">waist belt ironing</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">industrial iron</font></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="67" height="48" src="images/daleel/image157.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="68" height="58" src="images/daleel/image158.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
      </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Ps5SuI5Kryc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Overlock stitching for pocket flap</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Overedge 3 Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="64" height="48" src="images/daleel/image159.jpg">
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR">
          <img width="58" height="31" src="images/daleel/image160.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EFd</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/U-TXQ6ZKPL8">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Velcro fastening for all regular pockets and cargo (wide) pockets?</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image161.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR">
          <img width="59" height="36" src="images/daleel/image162.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSaw</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/TLMYaHE00vo">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26a</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing the back pockets and the cover (flaps)</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image163.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">
          <img width="50" height="36" src="images/daleel/image164.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSe</font></font></span>
      </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/9recFcq8Pg4">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26b</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing and fixing the flap to the back pocket of the overalls</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image165.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR">
          <img width="50" height="36" src="images/daleel/image166.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSe</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/aFBn3n4gq8U">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connect and sew the top of the jumpsuits with the bottom</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image165.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image167.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/8MievdgJVt8">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28a</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Central stitching on the front of the jumpsuits</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image163.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image168.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/u7oeM_rH3sU">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28b</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing in the middle of the jumpsuit from the back</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image169.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image168.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/ekqepe9C0cA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29a</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing and fixing the waist belt with overalls</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image165.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image170.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/S3ciJeTDUkA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29b</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">waist belt sew</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image171.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image172.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/CoypSbTLRF0">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fastening and stitching the reinforcing rope or qaitan ( </font></font></span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cord .).</font></font></span>
        <span dir="ltr"></span>
        <span lang="AR-SA" style="font-size:13.0pt;color:black">
          <span dir="ltr"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image153.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image173.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Kpy7oBd3QTc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Installing the main front zipper on an outer fabric strip</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image169.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image174.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">48</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/kiIadMUpdho">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Installing and installing the front zipper tape on the overalls</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image175.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image170.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/qMuismkqQbQ">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33a</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing the gusset on the chest</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image176.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image177.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">46</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/6ai3ti2nwzU">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33b</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Front zipper end stitching</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image178.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image179.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/UXCvwRjmbsM">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">shoulder stitching</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image180.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image181.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/O0DCjbGtQj4">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Shoulder strap stitching, cleaning and adjustment</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image182.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image183.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/L0ZG0P9cdtA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36a</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing the epaulettes that are placed on the shoulder of the jumper</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image184.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image174.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/bywzehg7uuA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36b</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Installing the velcro tape</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image184.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image185.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/WDLEoMVvn5M">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37</font></font></span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Shoulder stitching and shoulder tape</font></font></span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image182.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image174.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSab</font></font></p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/6Pd_q23D2W0">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>

  

  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sew jumpsuit sleeve</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image186.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image187.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/3yFFe1PpV70">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sew the armhole and secure it with the overalls</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image188.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image189.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/3IefCGieEQg">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Closing and sewing the side part of the overalls</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image190.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image191.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/5z3csSKOv_E">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">41a</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing the big pockets of jumpsuits</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image188.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image192.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/xPvyjYWNEJA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">41b</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing the big pockets of jumpsuits</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image193.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image194.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/VyjZazQv4Co">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">42</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">jumpsuit collar ironing</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">industrial iron</font></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">
          <img width="67" height="48" src="images/daleel/image195.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="68" height="58" src="images/daleel/image196.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/HcEtqTMmJe4">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">43a</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Separate collar stitching</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image197.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image198.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">43</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/MiBufnGXfKo">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">43b</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Collar Extension Sewing</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image199.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image200.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/hmuucIQetVI">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">43c</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adhesive Velcro Fixing for Collar Extension</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image201.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR">
          <img width="50" height="36" src="images/daleel/image202.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSe</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/P4Qj_ZGJCi8">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The collar expansion part has arrived</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image203.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image204.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/MeE_7Ah0pJY">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connecting and sewing the collar, laying down the washing instructions and sewing the collar</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image205.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR">
          <img width="50" height="36" src="images/daleel/image206.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSe</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Zq70s8UNeeY">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">46</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Large pocket and flap stitching (pocket cover)</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image207.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR">
          <img width="59" height="36" src="images/daleel/image208.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSaw</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/nLyaksQx8XA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fixing and sewing Velcro on the shoulder</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image207.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR">
          <img width="79" height="31" src="images/daleel/image209.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSat</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/MJ-5aIJvKlg">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">48</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sewing both ends of the jumpsuits</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image210.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image211.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SSa</font></font></p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/nubxJx-I7jE">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">49</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Twist and bend the stitching of the sleeves and the legs of the jumpsuits</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
        <font style="vertical-align: inherit;"><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Single Needle </font></span><span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;">Knitting Machine</font></span></font><span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image203.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="75" height="37" src="images/daleel/image212.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EFm</font></font></span>
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/ODsBwu7AKjg">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Making the fixing stitches ( </font></font></span>
        <span lang="AR-EG" style="font-size:
  13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">farmatora </font></font></span>
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">) </font></font></span>
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">for the pockets, zippers, and cover the pockets</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">fermator machine</font></font></span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="67" height="48" src="images/daleel/image213.jpg">
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="66" height="35" src="images/daleel/image214.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fsf</font></font></span>
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/joeY6rQZBLk">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt">
          <span dir="LTR"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">51</font></font></span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clean all sewing areas</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hand scissors</font></font></span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">
          <img width="66" height="48" src="images/daleel/image215.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">
          <img width="59" height="59" src="images/daleel/image216.jpg">
        </span>
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/tU9z8Pg9VYk">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">&nbsp;</span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1596</font></font></span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">75</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">

      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">&nbsp;</span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" dir="ltr">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total in minutes</font></font></span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="ltr" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td width="98" colspan="2" valign="bottom" style="width:73.25pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">101.6</font></font></span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        
      </td>
  </tr>


  </tbody>
</table>
                                <?PHP
                              } else {
                                ?>
                                












                                <table class="table table-bordered"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
  <tbody>
    <tr style="height:7.5pt">
      <td width="33" rowspan="2" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black">الرقم</span>
          </b>
        </p>
      </td>
      <td width="192" rowspan="2" valign="top" style="width:144.15pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black">المراحل</span>
          </b>
        </p>
      </td>
      <td width="121" rowspan="2" style="width:90.8pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:#00B050">نوع الماكينات أو المُعدة</span>
          </b>
        </p>
      </td>
      <td width="79" rowspan="2" style="width:59.45pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:#00B050">شكل الماكينة أو المُعدة</span>
          </b>
        </p>
      </td>
      <td width="179" rowspan="2" style="width:134.35pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-EG" style="font-size:13.0pt;color:#00B050">شكل العملية</span>
          </b>
        </p>
      </td>
      <td width="82" colspan="2" valign="top" style="width:61.7pt;border:solid windowtext 1.0pt;
  border-right:none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black">زمن الإنتاج (ثانية </span>
          </b>
        </p>
      </td>
      <td width="100" rowspan="2" valign="top" style="width:100.9pt;border:solid windowtext 1.0pt;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black">فيديو مراحل الانتاج</span>
          </b>
        </p>
      </td>
    </tr>
    <tr style="height:7.5pt">
      <td width="45" valign="top" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black">ثانية</span>
          </b>
        </p>
      </td>
      <td width="37" valign="top" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt;height:7.5pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <b>
            <span lang="AR-SA" style="font-size:13.0pt;color:black">دقيقة</span>
          </b>
        </p>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span>1 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left: solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt">كي قطعة قماش عاكس بلون رصاصي التي تثبت على الصدر</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt">مكواة صناعية</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="67" height="48" src="images/daleel/image117.jpg">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:ltr;unicode-bidi:embed">
          <img width="68" height="58" src="images/daleel/image118.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left: solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">42</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Qmu6KM8xMQQ">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>2 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة القماش العاكس باللون الرصاصي على صدر افرول العمال</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle </span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image119.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">
            <img width="79" height="31" src="images/daleel/image120.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">SSat</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span>37 </span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Avd-tHrdh1Y">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span>3 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt">خياطة أوفرلوك لبعض الأجزاء العلوية للأفرول</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt">ماكينة </span>
          <span lang="AR-EG" style="font-size:13.0pt">اوفرلوك 3 خيوط</span>
          <span lang="AR-EG" style="font-size:13.0pt"></span>
        </p>
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span>3 Thread Surgery Machine </span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">
            <img width="64" height="49" src="images/daleel/image121.jpg" alt="JACK E-04 3 Thread Overlock (Direct Drive) Industrial Sewing Machine  5051146779829 | eBay">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" dir="LTR" style="text-align:left;direction:ltr;unicode-bidi:
  embed">
          <img width="162" height="48" src="images/daleel/image122.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">EFd</p>
      </td>
      <td width="45" style="width:33.95pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">41</span>
        </p>
      </td>
      <td width="37" style="width:27.75pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">1</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/n9G-6NCjChY">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
      
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span>4 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt">تدعيم الجيوب بحبل أو قيطان (</span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt">Cord</span>
          <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>
          <span lang="AR-SA" style="font-size:13.0pt">
            <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>) </span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image123.jpg">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="175" height="51" src="images/daleel/image124.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">OSb</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">14</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/B3GQKaJRjpc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>5 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">تثبيت السحابات لجميع الجيوب</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image123.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image125.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">21</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/uznD002oBlo">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>6 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">وصل الجزء العلوي مع الجزء السفلي للأفرول</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image123.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image126.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">17</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/EBPbRd9GBJU">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span>7 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt">كي قماش جيوب الصدر</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt">مكواة صناعية</span>
        </p>
      </td>
      <td width="79" valign="top" style="width:59.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="67" height="48" src="images/daleel/image127.jpg">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="68" height="58" src="images/daleel/image128.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">33</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/1RQvsXBG4mM">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>8 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة جيب الصدر على الجزء العلوي للأفرهول</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image129.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">
            <img width="79" height="31" src="images/daleel/image130.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">SSat</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span>3 </span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/adHkziQNT28">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>9 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">وصل الجيب الجانبي</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image131.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image132.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">34</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">1</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/qzSgGgbGb8I">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>10 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">حياكة الجيب الجانبي لأفرول العمال</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image133.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image134.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">19</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">1</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/VpTqBvd3MGA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>11 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">حياكة الأوفر على أطراف الجيب الجانبي</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة الأطراف </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Overedge 3 Needle</span>
        </p>
      </td>
      <td width="79" valign="top" style="width:59.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="64" height="48" src="images/daleel/image135.jpg">
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">
            <img width="58" height="31" src="images/daleel/image136.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">EFd</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span>27 </span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/CyTkapafmaw">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>12 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">طريقة تثبيت الفلكرو الخاص بقلاب (رفرف) غطاء الجيب</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image133.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">
            <img width="59" height="36" src="images/daleel/image137.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">SSaw</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span>15 </span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/E3aWAvVQBK0">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span>13 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt">تجهيز (</span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt">Flaps</span>
          <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>
          <span lang="AR-SA" style="font-size:13.0pt">
            <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>) قلاب (رفرف) الجيب القابل للطي </span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt">يدويا</span>
        </p>
      </td>
      <td width="79" valign="top" style="width:59.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="58" height="60" src="images/daleel/image138.jpg" alt="Hand Icon On White Background Vector Stock Vector (Royalty Free) 1662545224">
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="58" height="60" src="images/daleel/image138.jpg" alt="Hand Icon On White Background Vector Stock Vector (Royalty Free) 1662545224">
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">47</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Bem9UVzIVRA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>14 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الجيوب والبطانات والقلابات للجيوب الخلفية للأفرول</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image133.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">
            <img width="59" height="36" src="images/daleel/image139.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">SSaw</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span>24 </span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/3dlOFXjfgEw">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>15 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة (</span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Flaps</span>
          <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>
          <span lang="AR-SA" style="font-size:13.0pt;color:black">
            <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>) للجيب الخلفي والجيب الكارجو الكبير </span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image140.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">
            <img width="59" height="36" src="images/daleel/image141.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">SSaw</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span>37 </span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/wmKXjX2IXKQ">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span>16 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt">تجهيز الجزء الأمامي الذي يغطي سحاب الأفرول</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt">يدويا</span>
        </p>
      </td>
      <td width="79" valign="top" style="width:59.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="58" height="60" src="images/daleel/image142.jpg" alt="Hand Icon On White Background Vector Stock Vector (Royalty Free) 1662545224">
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="58" height="60" src="images/daleel/image142.jpg" alt="Hand Icon On White Background Vector Stock Vector (Royalty Free) 1662545224">
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">26</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">1</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/LuiPBrs9FNA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>17 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة كسرات الظهر لأفرول العمال</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image143.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image144.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">27</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/BsdAV1CnTyI">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>18 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة غطاء السحاب (</span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Zipper Fly</span>
          <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>
          <span lang="AR-SA" style="font-size:13.0pt;color:black">
            <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>) </span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image145.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">
            <img width="50" height="36" src="images/daleel/image146.jpg">
          </span>
        </p>
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR">SSe</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span dir="LTR"></span>
          <span style="font-size:13.0pt;
  color:black">
            <span dir="LTR"></span>10 </span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">2</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/BsdAV1CnTyI">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt">
            <span dir="LTR"></span>19 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt">خياطة الجزء الخلفي على شكل حرف (</span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt">T</span>
          <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>
          <span lang="AR-SA" style="font-size:13.0pt">
            <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>) </span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image147.jpg">
          </span>
        </p>
      </td>
      <td width="179" valign="top" style="width:134.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="175" height="45" src="images/daleel/image148.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">OSa</span>
        </p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">21</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/xFy_NpLTQbg">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>20 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الجزء الخلفي (المقعدة) للأفرول</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image149.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image150.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">44</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/V_zgZgr7EZY">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>
    <tr>
      <td width="33" valign="top" style="width:24.9pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span dir="LTR"></span>
          <span dir="LTR" style="font-size:13.0pt;color:black">
            <span dir="LTR"></span>21 </span>
        </p>
      </td>
      <td width="192" valign="top" style="width:144.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
          <span lang="AR-SA" style="font-size:13.0pt;
  color:black">وصل أجزاء الأفرول الخلفية</span>
        </p>
      </td>
      <td width="121" valign="top" style="width:90.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
          <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
          <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
        </p>
      </td>
      <td width="79" style="width:59.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">
            <img width="61" height="48" src="images/daleel/image151.jpg">
          </span>
        </p>
      </td>
      <td width="179" style="width:134.35pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <img width="69" height="38" src="images/daleel/image152.jpg">
        </p>
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
      </td>
      <td width="45" valign="bottom" style="width:33.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">17</span>
        </p>
      </td>
      <td width="37" valign="bottom" style="width:27.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 1.4pt 0in 1.4pt">
        <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
          <span style="font-size:13.0pt;color:black">&nbsp;</span>
        </p>
      </td>
      <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/5VrumT898pc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
    </tr>

    

  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>22 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">لفق وخياطة أطراف الجيوب</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image153.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="75" height="37" src="images/daleel/image154.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">EFm</span>
      </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">9</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/xSOKML98-g8">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt">
          <span dir="LTR"></span>23a </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt">كي الجيوب الخلفية والأجزاء الأمامية للأفرهول</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt">مكواة صناعية</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="67" height="48" src="images/daleel/image155.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="68" height="58" src="images/daleel/image156.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
      </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">47</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">3</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Ps5SuI5Kryc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt">
          <span dir="LTR"></span>23b </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt">كي حزام الوسط</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt">مكواة صناعية</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="67" height="48" src="images/daleel/image157.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="68" height="58" src="images/daleel/image158.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
      </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">26</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Ps5SuI5Kryc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>24 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الأوفرلوك لقلاب الجيوب </span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة الأطراف </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Overedge 3 Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="64" height="48" src="images/daleel/image159.jpg">
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR">
          <img width="58" height="31" src="images/daleel/image160.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">EFd</p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">29</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/U-TXQ6ZKPL8">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>25 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">تثبيت شريط الفلكرو اللاصق لجميع الجيوب العادية والجيب الكارجو (الواسع)؟</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image161.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR">
          <img width="59" height="36" src="images/daleel/image162.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSaw</p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">9</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/TLMYaHE00vo">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>26a </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الجيوب الخلفية والغطاء (القلابات )</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image163.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">
          <img width="50" height="36" src="images/daleel/image164.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">SSe</span>
      </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">38</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/9recFcq8Pg4">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>26b </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة وتثبيت القلاب للجيب الخلفي للأفرهول</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image165.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR">
          <img width="50" height="36" src="images/daleel/image166.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSe</p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">37</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/aFBn3n4gq8U">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>27 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">وصل وخياطة الجزء العلوي من الأفرول مع الجزء السفلي</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image165.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image167.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">34</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/8MievdgJVt8">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>28a </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة وسط الأفرول من الأمام</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image163.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image168.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">39</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/u7oeM_rH3sU">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>28b </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة وسط الأفرول من الخلف</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image169.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image168.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">32</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/ekqepe9C0cA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>29a </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة وتثبيت حزام الوسط مع الأفرول</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image165.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image170.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">31</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/S3ciJeTDUkA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>29b </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة حزام الوسط</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image171.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image172.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">35</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/CoypSbTLRF0">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>30 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">تثبيت وخياطة حبل التقوية أوالقيطان (</span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Cord</span>
        <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>
        <span lang="AR-SA" style="font-size:13.0pt;color:black">
          <span  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>"></span>) </span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image153.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image173.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">13</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">3</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Kpy7oBd3QTc">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>31 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">تركيب السحاب الأمامي الرئيسي على شريط قماش خارجي</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image169.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image174.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">48</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/kiIadMUpdho">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>32 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">تثبيت وتركيب شريط السحاب الأمامي على الأفرول</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image175.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image170.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">38</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">3</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/qMuismkqQbQ">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>33a </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة شريط التقوية على الصدر</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image176.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image177.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">46</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/6ai3ti2nwzU">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>33b </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة نهاية السحاب الأمامي</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image178.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image179.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">38</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/UXCvwRjmbsM">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>34 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الكتف</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image180.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image181.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">39</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/O0DCjbGtQj4">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>35 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة شريط الكتافات وتنظيفه وتعديله</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image182.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image183.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">37</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/L0ZG0P9cdtA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>36a </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الكتافات التي توضع على كتف الأفرهول</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image184.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image174.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">33</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/bywzehg7uuA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>36b </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">تثبيت شريط الفلكرو اللاصق</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image184.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image185.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">18</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/WDLEoMVvn5M">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="33" valign="top" style="width:24.85pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>37 </span>
      </p>
    </td>
    <td width="246" valign="top" style="width:184.25pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الأكتاف وتثبيت شريط الأكتاف</span>
      </p>
    </td>
    <td width="141" valign="top" style="width:105.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="90" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image182.jpg">
        </span>
      </p>
    </td>
    <td width="90" valign="top" style="width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="52" height="38" src="images/daleel/image174.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSab </p>
    </td>
    <td width="42" valign="bottom" style="width:31.5pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">23</span>
      </p>
    </td>
    <td width="48" valign="bottom" style="width:.5in;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/6Pd_q23D2W0">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>

  

  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>38 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة كم الأفرول</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image186.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image187.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">8</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/3yFFe1PpV70">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>39 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة فتحة الذراع وتثبيتها مع الأفرهول</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image188.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image189.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">23</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/3IefCGieEQg">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>40 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">غلق وخياطة الجزء الجانبي للأفرهول</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image190.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image191.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">3</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/5z3csSKOv_E">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>41a </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الجيوب الكبيرة للأفرول</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image188.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image192.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">18</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/xPvyjYWNEJA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>41b </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الجيوب الكبيرة للأفرول</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image193.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image194.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">12</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/VyjZazQv4Co">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt">
          <span dir="LTR"></span>42 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt">كي ياقة الأفرول</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt">مكواة صناعية</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">
          <img width="67" height="48" src="images/daleel/image195.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="68" height="58" src="images/daleel/image196.jpg" alt="Ironing icon linear symbol design from Royalty Free Vector">
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">27</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/HcEtqTMmJe4">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>43a </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الياقة منفصلة</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image197.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image198.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">43</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">2</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/MiBufnGXfKo">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>43b </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة وصلة تمديد الياقة</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image199.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image200.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">14</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/hmuucIQetVI">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>43c </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">تثبيت الفلكرو اللاصق لوصلة تمديد الياقة</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image201.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR">
          <img width="50" height="36" src="images/daleel/image202.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSe</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">35</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/P4Qj_ZGJCi8">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>44 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">وصل الجزء الخاص بتوسيع الياقة </span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image203.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image204.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">11</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/MeE_7Ah0pJY">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>45 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">توصيل وخياطة الياقة ووضع تعليمات الغسيل وخياطة الياقة</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image205.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR">
          <img width="50" height="36" src="images/daleel/image206.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSe</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">25</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">3</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/Zq70s8UNeeY">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>46 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة الجيب الكبير والقلاب (غطاء الجيب)</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image207.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR">
          <img width="59" height="36" src="images/daleel/image208.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSaw</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">24</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">4</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/nLyaksQx8XA">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>47 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">تثبيت وخياطة الفلكرو على الكتف</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image207.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR">
          <img width="79" height="31" src="images/daleel/image209.jpg">
        </span>
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSat</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">4</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/MJ-5aIJvKlg">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>48 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">خياطة طرفي الأفرول</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image210.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="69" height="38" src="images/daleel/image211.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">SSa</p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">38</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/nubxJx-I7jE">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>49 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">لفق وثني خياطة الأكمام وأرجل الأفرول</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة حياكة&nbsp; ابرة واحدة </span>
        <span lang="EN-GB" dir="LTR" style="font-size:13.0pt;color:black">Single Needle</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <img width="61" height="48" src="images/daleel/image203.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="75" height="37" src="images/daleel/image212.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">EFm</span>
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">13</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">3</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/ODsBwu7AKjg">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt;color:black">
          <span dir="LTR"></span>50 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">عمل </span>
        <span lang="AR-EG" style="font-size:
  13.0pt;color:black">غ</span>
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">رز التثبيت (الفارماتورة ) </span>
        <span lang="AR-SA" style="font-size:13.0pt;color:black">للجيوب والسحابات وغطاء الجيوب</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">ماكينة الفارماتورة</span>
      </p>
    </td>
    <td width="93" style="width:69.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="67" height="48" src="images/daleel/image213.jpg">
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <img width="66" height="35" src="images/daleel/image214.jpg">
      </p>
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">Fsf</span>
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">11</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">3</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/joeY6rQZBLk">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span dir="LTR"></span>
        <span dir="LTR" style="font-size:13.0pt">
          <span dir="LTR"></span>51 </span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt">تنظيف جميع مناطق الخياطة</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt">مقص يدويا</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">
          <img width="66" height="48" src="images/daleel/image215.jpg">
        </span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="font-size:13.0pt;color:black">
          <img width="59" height="59" src="images/daleel/image216.jpg">
        </span>
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">32</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">1</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/tU9z8Pg9VYk">
            <i class="fa fa-play-circle"></i>
        </a>
      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">&nbsp;</span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">الاجمالي</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td width="50" valign="bottom" style="width:37.8pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">1596</span>
      </p>
    </td>
    <td width="47" valign="bottom" style="width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">75</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">

      </td>
  </tr>
  <tr>
    <td width="47" valign="top" style="width:35.4pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">&nbsp;</span>
      </p>
    </td>
    <td width="189" valign="top" style="width:141.75pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>">
        <span lang="AR-SA" style="font-size:13.0pt;
  color:black">الاجمالي بالدقائق</span>
      </p>
    </td>
    <td width="123" valign="top" style="width:92.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center"  dir="<?PHP if($_SESSION['lang'] == 'ar'){ echo 'rtl'; } else { echo 'ltr'; } ?>" style="text-align:center">
        <span lang="AR-SA" style="font-size:13.0pt;color:black">&nbsp;</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td width="93" valign="top" style="width:69.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">&nbsp;</span>
      </p>
    </td>
    <td width="98" colspan="2" valign="bottom" style="width:73.25pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in 5.4pt 0in 5.4pt">
      <p class="MsoNormal" align="center" dir="LTR" style="text-align:center;direction:
  ltr;unicode-bidi:embed">
        <span style="color:black">101.6</span>
      </p>
    </td>
    <td class="text-center" style="padding-top: 17px;font-size:2em;border:solid windowtext 1.0pt;  border-top:none;padding:0in 1.4pt 0in 1.4pt">
        
      </td>
  </tr>


  </tbody>
</table>







                                <?PHP
                              }
                              ?>

                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End Two Default Section-->
	
  <?php include_once 'footer.php'; ?>

  <script>
$(function(){

  $(".video-link").click(function(e){
    e.preventDefault();
    $("#videoModal iframe").attr("src", ($(this).attr('data-src')+"?autoplay=1"));
  });

  $('#videoModal').on('hidden.bs.modal', function () {
    $("#videoModal iframe").attr("src", "");
  });

});

  </script>