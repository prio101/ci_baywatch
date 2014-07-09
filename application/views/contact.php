


    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                <form action="">
                <h2>You can Contact us : </h2>
                <label>Your Name : </label>
                <input type="text" class="form-control input-hg" name="humanName" placeholder="Mr.example" />
                <label>Your Question</label>
                <textarea class="form-control input-hg" name="question" > </textarea>
                <br />

                <p>Keep My Privacy , Do Not Share My Question With Others : </p>
                <div class="switch switch-square"
                     data-on-label="<i class='fui-check'></i>"
                     data-off-label="<i class='fui-cross'></i>">
                     <input type="checkbox" name="privacy"/>
                </div><!-- Privacy chevker -->
                
                <p>Input Some tag that will describe your question  more :</p>

                <input name="tagsinput" class="tagsinput" value="tag,example" /><!-- / of tags -->
            
                <p>Your Mail :</p>
                <input type="mail" class="form-control input-hg" name="email" placeholder="yourmail@somemail.com" />
                <br/>
                <p>Do you need our Promotional Newsletter:</p>
                    <label class="radio">
                    <input type="radio" name="group1" value="1" data-toggle="radio">
                        No
                    </label>

                    <label class="radio">
                    <input type="radio" name="group1" value="2" data-toggle="radio" checked>
                        Yes
                    </label>

                    <input type="submit" class="btn btn-inverse btn-block"  value="Submit" />
                </form>
            </div><!-- /col-md-6 -->
            <div class="col-md-6">
                <h3>Quote from our help desk</h3>
                <blockquote>
                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum z

                </blockquote>
            <div class="large-4">
                <?php 
                  
                    echo validation_errors() ;

                ?>
            </div>
            </div>
        </div><!-- /row -->
    </div><!-- / container -->

   <br />