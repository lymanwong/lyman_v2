<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">My
                <strong>rants</strong>
            </h2>
            <hr>
        </div>
        <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="http://www.city-data.com/forum/attachments/tv/146637d1426981918-show-similar-welcome-back-kotter-saved-3hc08.jpg" alt="">
            <h2>Classes versus Modules
                <br>
                <small>09.12.2014</small>
            </h2>
            <div class="text-left margins">
                <p><strong>What is a Class?</strong></p>
                <p>A class is a factory for objects (note the plural). If you don't want to create multiple instances of the class, there is no need for it to exist. If you would like more information about classes, click here and you'll be directed to last week's post.</p>
                <input type="checkbox" ng-model="checked"> I wanna read more!</p>
                <div ng-show="checked">

                <p><strong>What is a module?</strong><br/>
                A module is collection of methods and constants. Modules are a way of grouping together some functions and variables and classes, somewhat like classes, but more like namespaces. A namespace is a bully-free zone where your methods and constants can play together without having other methods and constants messing with them.</p>

                <p><strong>How are Classes and Modules different?</strong><br/>
                A class can be instantiated whereas a module cannot be instantiated.
                When you create an object instance from a class, this is the process called instantiation. Like in my Stormtrooper example from last weeks post:</p><br/>

                <p>Stormtrooper.new</p><br/>

                <p>You'll get a new copy of class Stormtrooper. You can't instantiate a module, and therefore it does not have self (that sounded kinda sad, huh?! lol).</p><br/>

                <p>The superclass of a class is a module whereas the superclass of a module is an object. I know what you're thinking...foul! What the heck is a superclass?!</p>

                <p><img class="img-responsive img-border img-full" src="http://d75822.medialib.glogster.com/thiluxan/media/c3/c34b6ef12bce95e3dc42b7c0af7de7aa0ee8b29b/jackie-chan-confused.png" alt=""></p>

                <p>Every class in Ruby has a superclass (except for BasicObject, which doesn't have a superclass):</p>

                <p><img class="img-responsive img-border img-full" src="https://sermoa.files.wordpress.com/2011/06/classes-and-superclasses.png" alt=""></p>


                <p>For the context of this blog, I don't want to go further. Just know that class's parent is module, but module is an instance of class.</p><br/>

                <p>Class consists of methods, constants, and variables whereas modules consists of methods, constants and classes. The difference is that methods contain classes, which in turn, can contain variables.</p><br/>

                <p>Classes contain class methods and instance methods whereas modules contain module methods and instance methods. Instance methods appear as methods in a class when the module is included, module methods do not. On the other hand, module methods may be called without creating an object, like Stormtrooper.fight, while instance methods may not.</p><br/>

                <p>Including a module into a class changes the method look up chain. So actually the class doesn't inherit any instance methods. Extending a class with a module is same as extending any object. The class simply acquires the module's methods as instance methods.</p><br/>

                <p>You cannot include a class into another class. Whereas modules can be included in classes and modules by using the include command. You will include all instance methods as instance methods in the class/module.</p><br/>

                <p>You cannot extend a class with the extend method; only with inheritance. In a module, you can extend instance by using the extend command. It extends a given instance with singleton methods from the module.
                </p>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="https://developer.atlassian.com/blog/2015/05/try-pair-programming/images/how-long.jpg" alt="">
            <h2>Work smarter, not harder
                <br/>
                <small>8.30.2014</small>
            </h2>
            <div class="text-left margins">
                <p>One of the major problems facing the tech industry is employee burnout and work-life balance. ...</p>
                <input type="checkbox" ng-model="checked"> I wanna read more!</p>
                <div ng-show="checked">
                <p>I mean, I understand that getting your product out provides companies with a competitive advantage and stretches out potential revenue, but at what cost?<br /><br />

                I use to work for a company that required me to work 7 days a week.  During the weekdays, I would work 12-14 hours and during the weekend, I would work 4-6 hours.  Although I worked hourly, I would have loved to just spend some down time and relax.  The main problem was planning.  The product managers did not plan far enough ahead in order to get the work started.  First they would need to write a single page spec document and have it approved by their manager.  Then they would have scope meetings to talk about the feature with the developers.  Then the product managers would then need to write a full spec document and have more meetings to discuss the feature flow, resources, and get final approval.  Once the feature and art has been completed, the feature reaches QA to test.  With their approval, the final product reaches prodcution.  If not, the developers would go back and fix their code.</p></br>

                <p>
                    Since I worked in support, features won't get released until the evening or weekend.  This forces me to get home as soon as possible and then login right away and report on the progress of the release.  If there are no p0 or p1 bugs, then we can relax a few hours post release and I can run my reports.  If there are serious bugs, then I would be on for hours until a hotfix is released and I have to wait a few more hours to see if it worked.  Once the fix has reached production, I had to make sure it worked and create a post-mortum report. Throughout the week, I had to run reports on the teams I managed and if there was a weekend release, I had to stay on until we're in the clear.</br></br>
                    So it's easy to get into this spiral where we are always working.  Everyone in the studio was working harder and harder.  Late nights were the norm and we were constantly looking at our phones for alerts.  As you can tell, it was hard to obtain a work-life balance.
                </p></br>

                <p><b>Is there a solution?</b></br>
                    To the defence of my former employer, they did the best they could to provide a fun environment.  They provided video games, free meals, gym membership, massages, free drink, and many other ammenities.  I really enjoyed working there, but many of the employees there did not have a work-life balance and were working in "the red" more often than not.  </br></br>
                    The studio managment started with providing a weekly survey that everyone had to fill out.  This survey was anonamous and was used as a temperature check.  We would indicate how we felt about our workload and stress level.  From there, management would adjust accordingly.  The leadership also started work on approved features earlier and made realistic timelines in order to mitigate employee burnout.  Product managers were held accountable for not providing spec docs in a timely fashion.  Features were getting finished earlier so QA doesn't have to stay past normal office hours in order to completely test a feature.  The studio stopped end-of-the-day, late night, and weekend releases unless absolutely necessary (low revenue).  This helped the entire studio relax a bit and not play "catch-up" every day.  It also helped flatten out revenue spikes (due to feature releases) and provided a more linear and predictable revenue projection.</br></br>

                    The funny thing is that many of the studios functioned in the same way.  With the high revenue demand, there was constant pressure from leadership to keep our numbers high at the expense of their employees.  If many of the startups out there shared this experience, employees will have a better work-life balance and feel less burned out.  I understand small companies want to do things on their own and independent of the big companies, but when it comes to best practices, why not be open to your predecessors and learn from their mistakes?</p>
                <hr>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <iframe src="https://www.facebook.com/video/embed?video_id=731353396909065" width="425"  height="250"  frameborder="0"></iframe></p>
            <h2>Ruby Jibber Jabber
                <br>
                <small>08.29.2014</small>
            </h2>
            <div class="text-left margins">
            <p><b>What's an <a href="http://ruby-doc.org/core-2.1.2/Enumerable.html" target="_blank">Enumerable</a> Module?</b></p>
                <p>An Enumerable Module is just a collection of functions that "does stuff" to a collection of values like arrays or hashes...</p>
                <input type="checkbox" ng-model="checked"> I wanna read more!</p>
                <div ng-show="checked">
                    <p>(calm down, I'm still talking about Ruby and not botany).  Depending on which function you are going to use on your collection, you will have different results. For example, there are functions that would allow you to search, sort, change your collections, and more.  It's also a streamlined  way to write loops (like you can write a 100 line poem describing how the blue sky touches the deepest parts of your soul or you can say "the blue sky looks awesome today". Both will convey the same message, but latter is less wordy. <a href="https://www.youtube.com/watch?v=bFEoMO0pc7k" target="_blank">Ain't nobody got time for that!</a>). Phew, that's a bunch of tech talk. BREAK TIME!</p>

                    <p class="text-center"><iframe width="425" height="250" src="http://www.youtube.com/embed/Z2guxhefWrQ" frameborder="0" allowfullscreen></iframe></p>

                    <p><b>What's #map? Doesn't it use Google Maps?!</b></br>
                    your_Collection.map is no way related to Google Maps.  This function actually makes a copy of your collection so you can do something to the copy.  For example:</br></br>
                    You have a collection of names called transformersS1E1:</br></br>

                    transformersS1E1 = ["Wheeljack", "Bumblebee", "Skywarp", "Starscream", "Thunder_Cracker", "Soundwave", "Laserbeak", "Trailbreaker", "Optimus_Prime", "Bluestreak"]</br></br>

                    Let's say that you want to sort these names in alphabetical order, but you wanted to keep the list the same because the names are listed in the order they appeared in the
                    <a href="http://www.youtube.com/embed/BNcWEkmMKBA" target="_blank">first episode</a>.  All you have to do is just make a copy of your list and then you can sort it alphabetically!</br></br>
                    transordered = transformersS1E1.map{|name| name}</br>
                    puts transformersS1E1.sort!</br></br>

                    You'll get the names sorted or you can do something else to that list knowing that the original list is intact. But you're probably asking, why do that when you can just sort the original list with .sort? Well then, I wouldn't be giving you an example of how .map works!  I mean, I could have though of a better example, but meh, the blue sky is awesome today I guess.</br></br>

                    Btw, did you see Ice-T rockin' those ski goggles?! Awesome. </p>

                    <p><b>Wud about #group_by?</b></br>
                    Basically, group_by breaks up your collection into groups based on whatever you like and then returns a hash where each key represents a group. Each key's value is an array that has the members of that group. For example, let's say you guys are playing a drinking game and the loser has to drink a pitcher of beer.  The game is to give the names of the Star Trek TNG bridge members that are divisible by 2 (first and last name since it' can't be THAT easy...lol):</br></br>

                    star_trek_tng_crew = ["Jean-Luc_Picard", "William_Riker", "Deanna_Troi", "Beverly_Crusher", "Data", "Worf", "Katherine_Pulaski", "Wesley_Crusher"]</br></br>

                    You'll use the following code:</br>
                    star_trek_tng_crew.group_by {|name| name.length % 2}</br></br>

                    You'll get:</br>
                    {1=>["Jean-Luc_Picard", "William_Riker", "Deanna_Troi", "Beverly_Crusher", "Katherine_Pulaski"], 0=>["Data", "Worf", "Wesley_Crusher"]}</br></br>

                    The one in front of the first array (list) it will tell you the remainder from dividing the length of the name by 2.  The part that concerns you, since you're probably totally wrecked if you taking on this challenge anyways, is the list with 0 in front of it.  All you have to say is Data, Worf, and Wesley Crusher, drop your red Solo cup like it's hot, and then...</p>

                    <p class="text-center"><iframe width="425" height="250" src="http://www.youtube.com/embed/BVrWDPi12zE" target="_blank"></iframe></p>

                    <p id="textarea"><b>Is #cycle like recycling?</b></br>
                        Uh kinda...#cycle will go through each item each item in your collection does something, go back to the top of your list and does it all over again until it reaches a break (where you're telling the code to stop) statement in your code...like <a href="http://www.youtube.com/embed/WfmTq2B31tE" target="_blank">this</a> video.  For example, let's say that you want to go through the Giants batting lineup and print each name:</br></br>

                        giants_lineup = ["Pagan", "Panik", "Posey","Sandoval", "Pence", "Morse", "Blanco","Crawford", "Vogelsong"]</br></br>

                        After using the following code, each player will be printed out:</br></br>
                        giants_lineup.cycle do |player|</br>
                            puts player</br>
                            break if player == "Vogelsong"</br>
                        end</br></br>

                        If you don't use break, the code would print each player until you get bored and want to do somthing else.</p>

                    <p><b>Arrays + Hashes == A Rash?</b></br>
                        If you got a rash on your mind, then you proooobably have something else more important to do than to read this blog.  Anyways, an array is an ordered collection of any object.  Remember the Giants batting lineup?  Well, each name in that collection (array) has a particular spot or key, not unlike their batting lineup.  We can access any object in the array using this unique key.  Pagan is the leadoff hitter and his spot in the collection is giants_lineup[0].  Panik is giants_lineup[1], Posey is giants_lineup[2] and so on.  I know it's weird since the counting starts with zero instead of 1, but that's how it is.</br></br>

                        A hash is similar to an array where you can collect objects in it, but the main differences are that it is a collection of key-value (you can read it as key to value) pair.  It is used to associate things you want to store to keys.  This means that you have a key, say "Posey", and have a value.  We can give "Posey" the value of "Catcher" and "First_Base".  We can also have another value-pair of key "Joaquin_Arias" with values "Third_Base","Shortstop","Second_Base".  It will look like this:</br></br>

                        player_position= {</br>
                        "Posey" => ["Catcher", "First_Base"]</br>
                        "Joaquin_Arias" => ["Third_Base","Shortstop","Second_Base"]</br>
                    }</br></br>

                        If you wanted to see what position Posey plays, you'd write:</br>player_position["Posey"]</br></br>

                        You'll get:  "Catcher", "First_base"</br></br>

                        So basically, hashes store data like arrays, but hashes points an object to another object.  You can think of it as assigning a certain "meaning" to a string.  Each time you refer to that string, it refers to it's "meaning".</p>
                <hr>
                </div>
            </div>
        <div class="col-lg-12 text-center">
            <ul class="pager">
                <li class="previous"><a href="#/blog2">&larr; Newer</a>
                </li>
                <li class="next"><a href="#/blog3">Older &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

