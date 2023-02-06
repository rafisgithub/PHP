body {
      font-family: <?php echo $fonts ?>;
    }

<!-- .phpcoding { width: 800px; margin: 0 auto; background:#ddd; }  -->
    .container {
      width: 900px;
      margin: 0 auto;
      background: <?php echo "#ddd" ?>
    }

    .header {
      background: #777;
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
