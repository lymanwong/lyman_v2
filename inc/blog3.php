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
            <img class="img-responsive img-border img-full" src="img/bueller.jpg" alt="">
            <h2>lasses versus Modules
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
                When you create an object instance from a class, this is the process called instantiation. Like in my Stormtrooper example from last weeks post:

                Stormtrooper.new

                You'll get a new copy of class Stormtrooper. You can't instantiate a module, and therefore it does not have self(that sounded kinda sad, huh?! lol).

                The superclass of a class is a module whereas the superclass of a module is an object. I know what you're thinking...foul! What the heck is a superclass?!

                Every class in Ruby has a superclass (except for BasicObject, which doesn't have a superclass):

                For the context of this blog, I don't want to go further. Just know that class's parent is module, but module is an instance of class.

                Class consists of methods, constants, and variables whereas modules consists of methods, constants and classes. The difference is that methods contain classes, which in turn, can contain variables.

                Classes contain class methods and instance methods whereas modules contain module methods and instance methods. Instance methods appear as methods in a class when the module is included, module methods do not. On the other hand, module methods may be called without creating an object, like Stormtrooper.fight, while instance methods may not.

                Including a module into a class changes the method look up chain. So actually the class doesn't inherit any instance methods. Extending a class with a module is same as extending any object. The class simply acquires the module's methods as instance methods.

                You cannot include a class into another class. Whereas modules can be included in classes and modules by using the include command. You will include all instance methods as instance methods in the class/module.

                You cannot extend a class with the extend method; only with inheritance. In a module, you can extend instance by using the extend command. It extends a given instance with singleton methods from the module.
                </p>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="img/saltnpepa.jpg" alt="">
            <h2>Pairing and Giving Feedback
                <br/>
                <small>09.06.2014</small>
            </h2>
            <div class="text-left margins">
                <p><strong>One emotion that arose during my pairing session</strong></p>
                <p>While I am working with a partner on a pair session, I run through a gambit of emotions. The emotion that stands out above all others is excitement...</p>
                <input type="checkbox" ng-model="checked"> I wanna read more!</p>
                <div ng-show="checked">
                <p>I'm excited to work with someone new on a project. I like to learn more about them and find a way that we can work best. I also like to find out what's their thought process about a particular problem and compare what I had in mind.<br />
                cd .The only frustrating part is when both of us is stuck on a problem. One thing that I like to do is to "think aloud" and walk through the process. I also discovered that I like the trial and error process.</p>

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
                <hr>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="img/compass.jpg" alt="">
            <h2>Stereotype Threat
                <br>
                <small>09.13.2014</small>
            </h2>
            <div class="text-left margins">
            <p><strong>What is stereotype threat?</strong></p>
                <p>Stereotype threat refers to the risk of confirming negative stereotypes about an individual's racial, ethnic, gender, or cultural group.</p>
                <input type="checkbox" ng-model="checked"> I wanna read more!</p>
                <div ng-show="checked">
                    <p>They are Withdrawl (e.g. isolating oneself or running and hiding), Attack Self (e.g. self put-down or masochism), Avoidance (e.g. denial, abusing drugs/alcohol, or distraction through thrill-seeking), and Attack Other (e.g. "Turning the tables", blaming the victim, or lashing out verbally/physically). You can read more about it here.</p>

                    <p>When I was in grade school, I had conflict with someone in the grade above me. I can't recall if there was anything specific we had conflict about. During recess, he would constantly tease me. Since I had a short temper, I would immediately become upset and shout obsenities back at him. He just laughed.</p>

                    <p>Looking back at it, reacting in such a way doesn't make the situation any better. Come to think about it, he probably liked aggravating me. If I could go back, I would just ignore him. From that experience, I learned that I needed to be more patient with idiots. :P</p>
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

