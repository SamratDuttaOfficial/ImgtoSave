                            <form  action="signup_save.php" method="post" autocomplete="on"> 
                                <h4> Sign up </h4> 
								<hr>
                                <p>                                     
                                    <label for="username" class="uname" data-icon="u">Your username</label>
                                    <input type="text" name="name" required="required" placeholder="Username" id="name" class="demoInputBox" autocomplete="off">
                                  
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Your Email Address </label>
                                    <input id="passwordsignup" name="email" required="required" type="text" placeholder="Email address"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8d5651651$EO"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Your First Name </label>
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="First Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Your Last Name </label>
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Last Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="">Your Gender </label>
									<select id="passwordsignup"  name="gender">
										<option></option>
										<option>Male</option>
										<option>Female</option>
									</select>
                                </p>
                                <small style="font-family:courier,'new courier';" class="text-muted">Caution: By clicking 'SIGN UP' you are accepting all the <u><a href="tos.txt">Terms of services</a></u> and <u><a href="privacypolicy.htm"> Privacy policies</a></u> of <nobr>'ImgtoSave'.</nobr></small>              
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p>  
									Already a member ?
                                <br>    
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>