<body xmlns="http://www.w3.org/1999/html" id="installalampstack">
<!--<main id="main">
-->
    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route myabout">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-2 colpadding">
                                <div class="btn-group-vertical" role="group" aria-label="">
                                    <button type="button" class="btn btn-outline-dark mybtngroup"><a href="<?php echo base_url(); ?>writing">ABOUT</a></button>
                                    <button type="button" class="btn btn-outline-dark mybtngroup"><a href="<?php echo base_url(); ?>writingabout">INTRO</a></button>
                                    <!--                                    <button type="button" class="btn btn-dark">Samples</button>
                                    -->                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark mybtngroup dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            SAMPLES
                                        </button>
                                        <ul class="dropdown-menu mybtngroup" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>dita">DITA</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>docbook">DocBook</a></li>
                                            <!--<li><a class="dropdown-item" href="<?php echo base_url(); ?>epub">ePub</a></li>-->
                                            <!--<li><a class="dropdown-item" href="#">TEI</a></li>
                                            <li><a class="dropdown-item" href="#">OpenAPI</a></li>-->
                                        </ul>
                                    </div>
                                                                        <button type="button" class="btn btn-outline-dark mybtngroup"><a href="<?php echo base_url(); ?>mainblog">BLOG</a></button>
                                     <!--<button type="button" class="btn btn-dark">Search</button>
                                    <button type="button" class="btn btn-dark">Index</button>-->

                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="title-box-2">
                                    <h3 class="title-a">Lamp Stack Installation</h3>
                                </div>
                                <main role="main"><article role="article" aria-labelledby="ariaid-title1">

                                        <div class="body lead">

                                            <p class="p">Setting up a LAMP (Linux, Apache, MySQL, PHP) stack on the latest long-term release of Ubuntu involves several steps. This guide assumes you have a clean installation of Ubuntu and a user account with sudo privileges.</p>

                                            <p class="p"><strong class="ph b">Step 1: Update Package Lists</strong></p>

                                            <pre class="pre codeblock language-bourne">sudo apt update
sudo apt upgrade</pre>

                                            <p class="p"><strong class="ph b">Step 2: Install Apache Web Server</strong></p>

                                            <pre class="pre codeblock language-bourne">sudo apt install apache2</pre>

                                            <p class="p">Start the Apache service:</p>

                                            <pre class="pre codeblock language-bourne">sudo systemctl start apache2</pre>

                                            <p class="p">Enable Apache to start on boot:</p>

                                            <pre class="pre codeblock language-bourne">sudo systemctl enable apache2</pre>

                                            <p class="p"><strong class="ph b">Step 3: Install MySQL Server</strong></p>

                                            <pre class="pre codeblock language-bourne">sudo apt install mysql-server</pre>

                                            <p class="p">During the installation, you'll be prompted to set a password for the MySQL root user. Follow the instructions to complete the setup.</p>

                                            <p class="p">Start the MySQL service:</p>

                                            <pre class="pre codeblock language-bourne">sudo systemctl start mysql</pre>

                                            <p class="p">Enable MySQL to start on boot:</p>

                                            <pre class="pre codeblock language-bourne">sudo systemctl enable mysql</pre>

                                            <p class="p"><strong class="ph b">Step 4: Install PHP and Required Modules</strong></p>

                                            <pre class="pre codeblock language-bourne">sudo apt install php libapache2-mod-php php-mysql</pre>

                                            <p class="p"><strong class="ph b">Step 5: Configure Apache to Use PHP</strong></p>

                                            <p class="p">Edit the Apache default configuration file:</p>

                                            <pre class="pre codeblock language-bourne">sudo nano /etc/apache2/sites-available/<span class="hl-number">000</span>-default.conf</pre>

                                            <div class="p">Add the following lines inside the <pre class="pre codeblock"><code>&lt;VirtualHost&gt;</code></pre> block, just before the closing <pre class="pre codeblock"><code>&lt;/VirtualHost&gt;</code></pre> tag:</div>

                                            <pre class="pre codeblock"><code>&lt;FilesMatch \.php$&gt;
    SetHandler application/x-httpd-php
&lt;/FilesMatch&gt;</code></pre>

                                            <p class="p">Save and exit the file.</p>

                                            <p class="p">Restart Apache to apply the changes:</p>

                                            <pre class="pre codeblock language-bourne">sudo systemctl restart apache2</pre>

                                            <p class="p"><strong class="ph b">Step 6: Test PHP</strong></p>

                                            <p class="p">Create a PHP test file in the default web root directory:</p>

                                            <pre class="pre codeblock language-bourne"><strong class="hl-keyword">echo</strong> <span class="hl-string">"&lt;?php phpinfo(); ?&gt;"</span> | sudo tee /var/www/html/info.php</pre>

                                            <div class="p">Visit <pre class="pre codeblock"><code>http://your_server_ip/info.php</code></pre> in a web browser. You should see a page with PHP information.</div>

                                            <p class="p"><strong class="ph b">Step 7: Configure MySQL</strong></p>

                                            <p class="p">Run the MySQL secure installation script:</p>

                                            <pre class="pre codeblock language-bourne">sudo mysql_secure_installation</pre>

                                            <p class="p">Follow the on-screen prompts to set up security options for your MySQL installation.</p>

                                            <p class="p"><strong class="ph b">Step 8: Create a MySQL Database and User</strong></p>

                                            <p class="p">Login to MySQL:</p>

                                            <pre class="pre codeblock language-bourne">sudo mysql</pre>

                                            <p class="p">Run the following commands to create a new database and user, and grant privileges:</p>

                                            <pre class="pre codeblock language-sql"><strong class="hl-keyword">CREATE</strong> DATABASE your_database_name;
<strong class="hl-keyword">CREATE</strong> <strong class="hl-keyword">USER</strong> <span class="hl-string">'your_user'</span>@<span class="hl-string">'localhost'</span> IDENTIFIED <strong class="hl-keyword">BY</strong> <span class="hl-string">'your_password'</span>;
<strong class="hl-keyword">GRANT</strong> <strong class="hl-keyword">ALL</strong> <strong class="hl-keyword">PRIVILEGES</strong> <strong class="hl-keyword">ON</strong> your_database_name.* <strong class="hl-keyword">TO</strong> <span class="hl-string">'your_user'</span>@<span class="hl-string">'localhost'</span>;
FLUSH <strong class="hl-keyword">PRIVILEGES</strong>;
EXIT;</pre>

                                            <div class="p">Replace <pre class="pre codeblock"><code>your_database_name</code></pre>, <pre class="pre codeblock"><code>your_user</code></pre>, and <pre class="pre codeblock"><code>your_password</code></pre> with your preferred values.</div>

                                            <p class="p"><strong class="ph b">Step 9: Test the LAMP Stack</strong></p>

                                            <p class="p">Create a simple PHP script to test the connection to the MySQL database:</p>

                                            <pre class="pre codeblock language-php"><strong class="hl-keyword">echo</strong> <span class="hl-string">"&lt;?php
\$conn = new mysqli('localhost', 'your_user', 'your_password', 'your_database_name');
if (\$conn-&gt;connect_error) {
    die('Connection failed: ' . \$conn-&gt;connect_error);
}
echo 'Connected successfully';
?&gt;"</span> | sudo tee /<strong class="hl-keyword">var</strong>/www/html/dbtest.php</pre>

                                            <div class="p">Visit <pre class="pre codeblock"><code>http://your_server_ip/dbtest.php</code></pre> in a web browser. If everything is configured correctly, you should see "Connected successfully."</div>

                                            <p class="p"><strong class="ph b">Step 10: Firewall Configuration (Optional)</strong></p>

                                            <pre class="pre codeblock language-bourne">sudo ufw allow <span class="hl-number">80</span></pre>

                                            <p class="p">Reload the firewall:</p>

                                            <pre class="pre codeblock language-bourne">sudo ufw reload</pre>

                                            <p class="p">Congratulations! You've successfully set up a LAMP stack on the latest long-term release of Ubuntu, with PHP as the backend language and MySQL as the database component. This configuration provides a solid foundation for hosting dynamic web applications.</p>

                                        </div>
                                    </article></main>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-outline-dark"><a href="<?php echo base_url(); ?>linuxindex">BACK TO ARTICLE MAP</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- End About Section -->




