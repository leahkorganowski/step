<?php
    require_once ('.things.php');
    $recipients = array ('xxxxxxx@gmail.com','xxxxxxx@gmail.com');
?>
    <div class="col2">
        <h1>Contact us</h1>
        <address>
        Sustainable Technology Education Project<br />
        Student Life Centre, Room 3102 <br />
        University of Waterloo<br />
        200 University Avenue West<br />
        Waterloo, Ontario N2L 3G1, Canada <br />
        <br />
        Telephone: 519-888-4567 ext 32182 <br />
        Email: <a href="mailto:step@feds.ca">step@feds.ca</a> <br />
        </address>
    </div>
    <div class="col2">
        <h1>Meeting times</h1>
        <p> Engineering Meetings: <br>
            Wednesdays 5:30 pm, Solar Lab, 3rd floor PRC Building </p>
        <p>Fundraising/Social Events Meetings:<br />
            Thursdays 5:00 pm, SLC 3102 (UWSP Office)</p>
        <p>Directors' Meetings:<br />
            Tuesdays 6:30 pm, SLC 3102 (UWSP Office)</p>
    </div>
<?php
    if (isset ($_POST['contact']) && strlen ($_POST['contact']) > 0 && 
        isset ($_POST['email']) && strlen ($_POST['email']) > 0 && 
        isset ($_POST['question']) && strlen ($_POST['question']) > 0) { // user submits shit.
        foreach ((array) $recipients as $recipient) {
            mail (
                $recipient, 
                "New STEP inquiry - attention needed",
                "Your have a new email! Contents as follows: nn" . var_export ($_POST, true),
                "From: step@feds.carn" . 
                "Reply-To: step@feds.ca"
            );
        }
?>
        <h1>Email sent.</h1>
<?php
    } else {
?>
        <h1>(e)mail us!</h1>
        <p>Use the form below to sign up for volunteer opportunities, discuss sponsorship options, or the newsletter.</p>
        <form method="post">
            <table>
                <tr>
                    <td>Your name:</td>
                    <td><input name="contact" id="contact" type="text" style="width:400px;" /></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input name="email" id="email" type="email" style="width:400px;"/></td>
                </tr>
                <tr>
                    <td>Type of inquiry:</td>
                    <td><select name="type" id="type" style="width:400px;">
                        <option>Volunteer information</option>
                        <option>Sponsorship options</option>
                        <option>Newsletter sign-up</option>
                        <option>Other</option>
                    </select></td>
                </tr>
                <tr>
                    <td>What do you want to know?</td>
                    <td><textarea name="question" id="question" rows="10" style="width:400px;"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input name="submit" id="submit" type="submit" /></td>
                </tr>
            </table>
        </form>
<?php
    }
    page_out (array ());
?>
