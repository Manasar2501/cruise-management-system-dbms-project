<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%; margin:0px; padding:0px; color: white;
      }

    .img{      
       background-image: url('https://www.hdwallpaper.nu/wp-content/uploads/2016/12/cruise_ship-21.jpg');
       background-size: cover;
       background-repeat: no-repeat;
       opacity: 85%;
    }

      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 18px;
      letter-spacing: 0.89px;
      line-height: 22px;
      }

      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 30px;
      } 


      form  {
      width: 80%;
      padding: 40px;
      border-radius: 6px;
      background: rgba(0,0,0,0.35);
      box-shadow: 0 0 40px  #000000; 
      }

      input, select,option, textarea {
      margin-bottom: 8px;
      background:rgba(0,0,0,0.50);
      border:0px 0px, 10px, 0px;
      border-radius: 5px
      }

      input {
      width: calc(100% - 8px);
      padding: 8px;
      }
       
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      color: white;
      }
     
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid ;
      box-shadow: 0 0 3px 0 ;
      }
      .item {
      position: relative;
      margin: 10px 100px;
      }

      .btn-block {
      margin-top: 10px;
      text-align: center;
      }

      button {
        background-color: #6280b4;
         letter-spacing: 1px;
         font-weight: bold;
         width: 200px;
         padding: 10px;
         border: none;
         border-radius: 5px; 
         font-size: 18px;
        cursor: pointer;
      }

      button:hover {
        box-shadow: 2px 2px 5px #555 ;
        background-color: #7799d4;
      }


    .item label, select, option, input{
      width: calc(100% - 8px);
      padding: 8px; color: white;

    }
     
    </style>
  </head>

  <body >
    <div class = "img" >

      <div class="testbox">
         
        <form id = "fm" onsubmit ="return  validation()" action="booking_insert.php" method="GET">
             <h1 style= 'text-align: center;' >BOOKING REGISTRATION</h1>

            <div class="item">
                    <input id="psgr_id" type="number" name="psgr_id" placeholder="passenger id" required />
                    <div class = "error"></div>
            </div>
        
            <div class="item">
                    <input id="psgr_name" type="text" name="psgr_name" placeholder="passenger name" required/>
                    <div class = "error"></div>
            </div>

            <div class="item">
                   <input id="psgr_age" type="number" name="psgr_age" placeholder="passenger age" required/>
                   <div class = "error"></div>
           </div>

            <div class="item">
                   <input id="psgr_email" type="email" name="psgr_email" placeholder="email" required/>
                   <div class = "error"></div>
           </div>
        
     

           <div class="item">
                    <label for="tr_date">Enter the travel date</label>
                    <input id="tr_date" type="date" name="tr_date"  size="12" placeholder = "yyyy-mm-dd "required/>

           </div>
          
           <div class="item">
               <label for="cruise_type" > cruise type</label><br>
                <select name = "cruise_type" id = "cruise_type">
                    <option selected value="" disabled selected></option>
                    <option value = "mainstream">  mainstream</option>
                    <option value = "premium"> premium      </option>
                    <option value = "luxury">  luxury        </option>
                </select>
        </div>

        <div class = "item" >
                <label for = "cruise_name"> Select a apropraite cruise name</label><br>
                <select name = "cruise_name" id = "cruise_name">
                      <optgroup label="mainstream">
                          <option value="carnival breeze">   carnival breeze     </option>
                          <option value="anthem of the sea"> anthem of the sea   </option>
                      </optgroup>
                      <optgroup label="premiun">
                         <option value="celebrity">celebrity </option>
                         <option value="capitals">capitals   </option>
                    </optgroup>
                    <optgroup label="luxury">
                         <option value="seabourn">          seabourn        </option>
                         <option value="regent seven seas"> regent seven seas</option>
                    </optgroup>
                </select>
        </div>

         <div class="item">
            <label for="amount" > payment </label><br>
             <select name = "amount" id = "amount">
                 <option selected value="" disabled selected></option>
                 <option value =5000>  Rs.5000( mainstream) </option>
                 <option value = 6500>Rs.6500(premium )   </option>
                 <option value = 10000> Rs.10000(luxury)   </option>
             </select>
        </div>

       
     <center>
        <div class="btn-block">
          <button type="submit" value = "submit" >SUBMIT</button>
     </center>
      </form>
    </div>

     <script>
         
         function validation(){
            var pname = document.getElementById('psgr_name');
            var letters = /^[A-Za-z]+$/;
             if(pname.value.match(letters))
            {
                return true;
            }
            else
             {
                    alert("wrong input pattern in passenger name feild");
                    return false;
            }
         }

     </script>

  </body>
</html>