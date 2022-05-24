<?php 
echo ' 
<div id="formHELP">
    <article>
        <h1>Help Request Form</h1>
            <form name="formHELP" action="http://cdlwebsysdev.esc-atsystems.net//WSD/form-to-email.php" onsubmit="return validateHELPForm()" method="post">
            <p>Please take a moment to fill out and submit this help form. <br /></p>
            <p>
                <label for="FromAddressH">*Enter your email (required).</label>
                <input type="text" id="FromAddressH" name="FromAddressH" minlength="5" maxlength="40" size="30"><br /><br />
                <label for="telnumberH">Enter your telephone number.</label>
                <input type="text" id="telnumberH" name="telnumberH" minlength="10" maxlength="20" size="30"><br /><br />
                <label for="firstnameH">*Enter your first name (required).</label>
                <input type="text" id="firstnameH" name="firstnameH" minlength="2" maxlength="20" size="20"><br /><br />
                <label for="lastnameH">*Enter your last name (required).</label>
                <input type="text" id="lastnameH" name="lastnameH" minlength="2" maxlength="30" size="30"><br /><br />
                Your Mailing Address:
                <br /><br />
                <label for="streetH">Enter your street.</label>
                <input type="text" id="streetH" name="streetH" minlength="2" maxlength="50" size="50"><br /><br />
                <label for="cityH">Enter your city.</label>
                <input type="text" id="cityH" name="cityH" minlength="2" maxlength="50" size="50"><br /><br />
                <label for="stateH">Enter your state.</label>
                <select id="stateH" name="stateH">
                    <option value="AL">AL</option>
                    <option value="AK">AK</option>
                    <option value="AR">AR</option>
                    <option value="AS">AS</option>
                    <option value="AZ">AZ</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DC">DC</option>
                    <option value="DE">DE</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="GU">GU</option>
                    <option value="HI">HI</option>
                    <option value="IA">IA</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="MA">MA</option>
                    <option value="MD">MD</option>
                    <option value="ME">ME</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MO">MO</option>
                    <option value="MP">MP</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="NC">NC</option>
                    <option value="NE">NE</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NV">NV</option>
                    <option value="NY">NY</option>
                    <option value="ND">ND</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="PR">PR</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="UM">UM</option>
                    <option value="VT">VT</option>
                    <option value="VA">VA</option>
                    <option value="VI">VI</option>
                    <option value="WA">WA</option>
                    <option value="WI">WI</option>
                    <option value="WV">WV</option>
                    <option value="WY">WY</option>
                </select> <br /> <br />
                <label for="postcodeH">Enter your postal code.</label>
                Postal Code:&nbsp;&nbsp;
                <input type="text" id="postcodeH" name="postcodeH" minlength="2" maxlength="10" size="10"><br /><br />
                <label for="countryH">Enter your country code.</label>
                Country Code:&nbsp;&nbsp;
                <input type="text" id="countryH" name="countryH" minlength="2" maxlength="3" size="3"><br /><br />

                <label for="helpH">*Please tell me what you require help with (required):</label>
                <textarea name="helpH" id="helpH" rows="10" cols="80"></textarea> <br /> <br />

                <br /> <br />

                       <div class="form-group options">
                           How would you like to be contacted? (Both boxes can be checked) :
                           <label for="contactphoneH">Phone</label>
                           <input type="checkbox" id="contactphoneH" name="contactphoneH">
                           <label for="contactemailH"> Email</label>
                           <input type="checkbox" id="contactemailH" name="contactemailH">
                           <br>
                       </div>

                <br /> <br />

                <input type="hidden" name="ToAddress" value="markholley4@gmail.com" />  <!-- TODO Change to todd.wolfe@esc.edu when final version published. -->
                <input type="hidden" name="CCAddress" value="markholley4@gmail.com" />
                <input type="hidden" name="Subject" value="WSD: Module 3 Assignment - Web Form for Mark Holley" />
                <button type="submit" value="SubmitH">Submit</button>
                <button type="reset" value="ResetH">Reset</button>
                
                <br /> <br />
            

        </form>




    </article>
</div>';
?>