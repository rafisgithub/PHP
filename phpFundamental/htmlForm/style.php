body {
      font-family: <?php echo $fonts ?>;
    }

    /* .phpcoding { width: 600px; margin: 0 auto; background:#ddd; } */
    .container {
      width: 600px;
      margin: 0 auto;
      background: <?php echo "#ddd" ?>
    }

    .header {
      background: #444;
      /* <?php echo $bgcolor ?>; */
      text-align: center;
      padding: 20px;
    }

    .footer {
      background: #000;
      color: green;
      text-align: center;
      padding: 15px;
    }

    .content {
      min-height: 350px;
      padding: 20px;
    }

    .header h2,
    .footer h2 {
      margin: 0;
      color: <?php echo $fontColor ?>;
    }

    #myForm{
      width:400px;
      border:1px solid #fff;
      padding :10px;
    }

    .tblone td{
      width:430px;
      border:1px solid; #fff;
      margin:20px;
      padding:5px 10px;

    }
    table.tblone tr:nth-child(2n+1){
      background:#fff;height:30px;
    }
    table.tblone tr:nth-child(2n){
      background:#f1ff1;height:30px;
    }
