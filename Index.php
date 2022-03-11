<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text],input[type=date],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style> 
</head>
<body>
    <h1>ROSNAC TECH COMPANY</h1>
    <h2>A short description about the company</h2>
    <p>We are tech company who render tech solutions to our clients, social media promotion, web development,blockchain development, ads creation, sells of francise and investments</p>
    <p>we help regular investors who are looking for a way to add value to their money via investment </p>
    <p>We are also in partnership with one of the best financial company who we work hand in hand, We help clients grow their social media </p>
    <strong>OUR GOAL</strong>
    <p>Our goal is to create financial freedom to our investors and give the best services to our clients who are interested in promoting their goods and services through us</p>
<p>In the nearest future, (very soon) we are will start helping businesses, students, salary earners who are looking for loans to booast their businesses, or for students who are looking for financial supports to fund their school needs then pay us instalmentally for a year 6times spread payment, also for salary earners who are struggling with rents to pay instalmentally while we pay the rent for them. and lots more</p>
    <h2>Job decription</h2>
    <h4>Your major work as a marketer is to create traffic for the company's product</h4>
    <ul>
        <li>Collaborating with sales, marketing, advertising, product design and product development team members to planning promotional marketing campaigns</li>
        <li>You must be very creative to bring out a good strategy that will atract your audience</li>
        <li>Making a minimum of 50 sells per week</li>
        <li>Creating editorial and content creation calendars for various media platforms and outlets</li>
        <li>Always ready to work under pressure, Result oriented</li>
        <li>You must be to make our product known to people around the world</li>
        <li> You monitor market trends, create advertising campaigns, develop best strategies and targeting strategies based on demographic data and work with the company to develop more awareness of what we offer.</li>
    </ul>
    <h3>Reqiuements</h3>
    <UL>
      <li>You must have at leat 2k views on your whatsapp handles</li>
      <li>Strong cretivity is required</li>
      <li>abilities to create new strategy that works for you</li>
    </UL>

    <h3>BENEFITS OF WORKING WITH US</h3>
    <ul>
        <li>If you make sells to over 100 clients within a week, an additional incentive of 20,000naira will be given to you including company's recognition</li>
        <li>An attractive work space will be given to you during when your services is needed onsite and also increment of salary</li>
        <li>A tribe to Dubia at least once in two years (all expense paid)</li>

    </ul>

    <h2>FILL THE BELOW FORM</h2>
    <h5>Email will be sent to concerning your employment</h5>
 
<div class="container">
  <form action="reg.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="email" placeholder="Email" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">Agenda</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="agenda" placeholder="MALE OR FEMALE" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="phone" placeholder="+234........." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Date of Birth</label>
      </div>
      <div class="col-75">
        <input type="date" id="lname" name="DOB" placeholder="Your DOB" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Experience</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="exp" placeholder="Highlight what more can you do" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">state</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="state" placeholder="state.." required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="fname">City</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="city" placeholder="City" required>
      </div>
    </div>


    <div class="row">
    
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country" required>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="canada">Ghana</option>
          <option value="Nigeria">Nigeria</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="fname">Bank name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="bank_name" placeholder="e.g first bank" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Account number</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="acc_num" placeholder="account number" required>
      </div>
    </div>
    <p>Why do I need to enter my bank account?
    </p>
    <p>Yes we need your account details incase you are inducted, you won't need to fill another form again</p>


    <div class="row">
      <div class="col-25">
        <label for="lname">paste a link to your active social media profile  </label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="link" placeholder="facebook, twitter, instagram, or tiktok" required>
      </div>
    </div>

    <div class="row">
    <div class="row">
      <div class="col-25">
        <label for="subject">Short application</label>
      </div>
      <div class="col-75">
        <textarea id="subject" required name="app" placeholder="A short decription about you and your abilities" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>