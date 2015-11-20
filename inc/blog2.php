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
            <iframe src="//giphy.com/embed/ymkUFbGgt3loA" width="480" height="203" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
            <h2>Valuable Values
                <br>
                <small>09.19.2014</small>
            </h2>
            <div class="text-left margins">
                <p><strong>Exploring one of my values</strong></p>
                <p>For me, excellence really stands out in my mind. This idea of excellence expands throughout my life; personal and professional. As far as personal, I want to be the best husband, friend, son, brother, cousin, etc. that I can be. Professionally, I want to be constantly improving each day. There is always something out there to learn to be a better student, employee, and co-worker. Basically, I want to be the best version of me I can be each day....</p>
<!--                 <input type="checkbox" ng-model="checked4"> I wanna read more!</p>
                <div ng-show="checked4"> -->

                <button ng-click="show4 = !show4">Read More</button>
                <div ng-show="show4" class="fade-in-out">

                <p><strong>What was the last topic someone asked for my advice on?</strong><br/>The last time I was asked for advice was whether or not we should increase the fee for our fantasy football league. Since the season has started, I stated that it would be unfair for those who couldn't afford the rate increase and we should postpone the hike for the following season. The league agreed with my suggestion.</p>

                <p><strong>Values and stereotype threat</strong><br/>
                Thinking about my values, I feel pretty good about it. My values definately helps me mediate sterotype threat. Anytime I feel down, I think about my wife and how lucky I am because she's so awesome. Anyone that knows her would agree with me.</p>
                <button ng-click="show4 = !show4">Hide</button>
                <div ng-show="show4" class="fade-in-out">
                </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 text-center">
            <iframe width="420" height="315" src="https://www.youtube.com/embed/MBvVocNTF34" frameborder="0" allowfullscreen></iframe>
            <h2>Ridin' in my SQL-aide
                <br/>
                <small>09.18.2014</small>
            </h2>
            <div class="text-left margins">
                <p><strong>What is SQL injection?</strong></p>
                <p>SQL injection has nothing to do with Breaking Bad (sorry fans). SQL injection is one of the most common forms of web attack methods used by hackers to steal our prescious data from organizations...</p>
                <!-- <input type="checkbox" ng-model="checked5"> I wanna read more!</p>
                <div ng-show="checked5"> -->
                <button ng-click="show5 = !show5">Read More</button>
                <div ng-show="show5" class="fade-in-out">
                <p>These hackers take advantage of improper coding used in web applications that allows then to inject SQL commands into your code, e.g. your login form, to gain access to the data within your databased. Since many web applications allow people to submit and retrieve data to and from a database, it's a prime target for hackers to input SQL statements to pass through and retrieve the database directly.</p>

                <p>You can prevent your site from being hacked by SQL injection:<br/>
                   1) Prepared statements (parameterized queries): Prepared statements force the developer to first define all SQL code, and then pass each parameter to the query later. This allows the database to distinquish between code and data, regardless of what user input has supplied. Prepared statements ensures that an attacker is not able to change the intent of a query because, say an attacker entered the userID of joe' or '1'='1, the parameterized query would not be vulnerable and would look for a username which literally matched the entire string tom' or '1'='1.</p>

                <p>2) Stored procedures: Stored procedues work similar to prepared statements and has the same effect. It also requires the developer to define the SQL code first, and then pass the parameters later. The difference between the two is that the SQL code for a stored procedure is defined and stored in the database itself, and then called from the application.</p>

                <p>3) Escaping all user supplied input: Each database management system supports one or more character escaping schemes specific to certain kinds of queries. Character escaping? Say whaaaaa? When you call this function on the input string, it will add a backslash in front of every special character. This will "muck up" the hacker's code so the database management system will not confuse that input with your SQL code.</p>

                <p>Least privilege: Minimize the privileges assigned to every database account by not assigning database access or admin type access rights to your application accounts. It's better to limit create or delete access to database accounts. Instead, make sure that accounts that only need read access are only granted read access to tables they need access to. If an account only needs access to portions of a table, consider creating a view that limits access to that portion of data and assigning the account access to view instead, rather than the underlying table.</p>

                <p>5) White list input validation: White list validation involves defining exactly what is authorized, and by definition, everything else is not authorized.</p>

                <p>SQL databases versus NoSQL databases.?<br />
                SQL databases are primarily called as Relational Databases (RDBMS); whereas NoSQL database are primarily called as non-relational or distributed database. Depending on your application, situation, necessities, etc you may go with one or the other. Below are just a few of the advantages and disadvantages of each:</p>

                <p>1) SQL databases are table based databases whereas NoSQL databases are document based, key-value pairs, graph databases or wide-column stores. This means that SQL databases represent data in form of tables which consists of some number of rows of data whereas NoSQL databases are the collection of key-value pair, documents, graph databases or wide-column stores which do not have standard schema definitions it needs to stick to.</p>

                <p>2) For complex queries: SQL databases are good fit for the complex query intensive environment whereas NoSQL databases are not good fit for complex queries. On a high-level, NoSQL don’t have standard interfaces to perform complex queries, and the queries themselves in NoSQL are not as powerful as SQL query language.</p>

                <p>3) For the type of data to be stored: SQL databases are not best fit for hierarchical data storage. But, NoSQL database fits better for the hierarchical data storage as it follows the key-value pair way of storing data similar to JSON data. NoSQL database are highly preferred for large data set (i.e for big data).</p>

                <p>4) For scalability: In most typical situations, SQL databases are vertically scalable. You can manage increasing load by increasing the CPU, RAM, SSD, etc, on a single server. On the other hand, NoSQL databases are horizontally scalable. You can just add few more servers easily in your NoSQL database infrastructure to handle the large traffic.</p>

                <p>5) For high transactional based application: SQL databases are best fit for heavy duty transactional type applications, as it is more stable and promises the atomicity as well as integrity of the data. While you can use NoSQL for transactions purpose, it is still not comparable and sable enough in high load and for complex transactional applications.</p>

                <p>How can you optimize SQL queries?<br />
                You can optimize your SQL queries by using some (or all) of the following:<br />
                1) Indexes: Indexes allow the database application to find data quickly without reading the entire table.</p>

                <p>2) Symbol Operator: Symbol operators such as >,<,=,!=,etc. will help speed up queries by bypassing characters that does not fullfill the requirement.</p>

                <p>3) Wildcard: You can optimze your query by using the wildcard (%) as a prefix ('%hello') or postfix ('hello%') instead of the full wildcard ('%hello%') especially if you have a large database.</p>

                <p>4) Not Operator: Instead of using the NOT operator, it's quicker to use search terms such as LIKE, IN, EXIST or the != symbol. If you use the negative operator, the query will search all the rows to determine what belongs (or not belong) to your query.</p>

                <p>5) Count vs Exist: If you are going to use COUNT to determine if a certain type of data is in your table, in this case, it would be better to use the EXIST operator since the query would stop once it's found. The COUNT operator would go through the entire table.</p>
                <p>6) Wildcard vs Substr: If you have indexed a column and you want to search for a particular value, use the wildcard operator instead of substr. Substr would look at every single row in order to find the value. For example: SELECT * FROM TABLE WHERE COLUMN = 'sirracha' =try=> SELECT * FROM TABLE WHERE COLUMN = 'sirr%'</p>
                <p>7) Index Unique Column: Depending on the database, it may be quicker if the column is unique and indexed, declare it as such.</p>
                <p>8) Max and Min Operators: If your column has been indexed, using Max or Min on said column would also be speed up.</p>
                <p>9) Data Types: Use the smallest data type as possible, such as using smaller integer types to get smaller tables.</p>
                <p>10) Primary Index: Try to make the primary column for indexing as short as possible.</p>
                <p>11) Limit The Result: Instead of return all values, limit the amount of returns to what is needed.</p>
                </div>

            </div>
        </div>
        <hr>
        <div class="col-lg-12 text-center">
            <iframe width="420" height="315" src="https://www.youtube.com/embed/VP0I-3yRTts" frameborder="0" allowfullscreen></iframe>
            <h2>Stereotype Threat
                <br>
                <small>09.13.2014</small>
            </h2>
            <div class="text-left margins">
            <p><strong>What is stereotype threat?</strong></p>
                <p>Stereotype threat refers to the risk of confirming negative stereotypes about an individual's racial, ethnic, gender, or cultural group.</p>
                <!-- <input type="checkbox" ng-model="checked6"> I wanna read more!</p>
                <div ng-show="checked6"> -->
                <button ng-click="show6 = !show6">Read More</button>
                <div ng-show="show6" class="fade-in-out">
                    <p>When have I felt sterotype threat?<br />
                        When I was applying for a school, I had to take an entrance exam over Skype. I did relatively well, but the instructor felt that I was almost there. He let me take another exam the following week. Unfortunately, I had to take the exam at their location. When I got there, I saw all these students working hard and I instantly felt overwhelmend and that I didn't belong there.
                    </p>

                    <p>When has it affected my achievement?<br />
                        Although I tried to push these insecurities aside, I was extremely stressed and began to sweat. When it was my turn to take the exam, I forgot everything I knew and began a spiral of sweating and hyperventiliating. Needless to say, I failed the exam miserably and walked out defeated. Of course, if someone were to ask me questions related to the exam, I could have easily answered it. Suckage!
                    </p>

                    <p>What questions did I ask myself?<br />
                       During this whole thing, I asked myself:<br />
                        "Who am I to walk into this place? You know nothing John Snow!"<br />
                        "You don't have a background in this, do you think you can get in?"<br />
                        "Do you think you could really succeed?"<br />
                        "Do you think you can be as good as the other Asian students?"
                    </p>
                    <p>Are there other groups that may feel it?<br />
                    Since I do not have a technical background, there are many groups that can feel the same way. Although I'm not great at math, even other Asians can feel pressure to live up to academic standars that other races have placed on us.</p>
                    <p>How can we help others in the same situation?<br />
                    I think what DBC did at the beginning of the course did a lot for me. The school went out of their way to show us that although we had difference backgrounds and amount of knowledge, we are all in this journey together. Not one individual is better than the other. They established that there will be times when you will be ahead and there will be other times when you will be behind. Creating a safe environment where we can freely ask questions and say "I don't know" is a great place to start.</p>
                    <button ng-click="show6 = !show6">Hide</button>
                    <div ng-show="show6" class="fade-in-out">
                    </div>
                <hr>
                </div>
            </div>
        <div class="col-lg-12 text-center">
            <ul class="pager">
                <li class="previous"><a href="#/blog">&larr; Newer</a>
                </li>
                <li class="next"><a href="#/blog3">Older &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
