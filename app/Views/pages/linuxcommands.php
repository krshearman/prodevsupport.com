<body xmlns="http://www.w3.org/1999/html" id="linuxcommandglossary">
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
                                    <h3 class="title-a">Linux Command Glossary</h3>
                                </div>
                                <main role="main"><article role="article" aria-labelledby="ariaid-title1">
                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title2" id="apt-get">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title2"><strong class="ph b">apt-get</strong></h2>
                                            <div class="abstract glossdef">Definition: Advanced Package Tool (APT) is a package management system used to install, update, and remove software packages on Debian-based systems.
                                                Example: sudo apt-get update</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title3" id="awk">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title3"><strong class="ph b">awk</strong></h2>
                                            <div class="abstract glossdef">Definition: A versatile programming language for pattern scanning and text processing. Often used for data extraction and reporting.
                                                Example: cat file.txt | awk '{print $1}'</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title4" id="cat">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title4"><strong class="ph b">cat</strong></h2>
                                            <div class="abstract glossdef">Definition: Concatenates and displays the content of files. It is often used to display the contents of a file to the terminal.
                                                Example: cat file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title5" id="cd">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title5"><strong class="ph b">cd</strong></h2>
                                            <div class="abstract glossdef">Definition: Changes the current working directory to the specified location.
                                                Example: cd /path/to/directory</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title6" id="chmod">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title6"><strong class="ph b">chmod</strong></h2>
                                            <div class="abstract glossdef">Definition: Changes the permissions of a file or directory.
                                                Example: chmod 755 file.sh</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title7" id="chown">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title7"><strong class="ph b">chown</strong></h2>
                                            <div class="abstract glossdef">Definition: Changes the owner and group of a file or directory.
                                                Example: chown user:group file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title8" id="cp">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title8"><strong class="ph b">cp</strong></h2>
                                            <div class="abstract glossdef">Definition: Copies files or directories from one location to another.
                                                Example: cp sourcefile destination</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title9" id="curl">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title9"><strong class="ph b">curl</strong></h2>
                                            <div class="abstract glossdef">Definition: A command-line tool for transferring data with URLs. It supports a wide range of protocols.
                                                Example: curl -O https://example.com/file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title10" id="df">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title10"><strong class="ph b">df</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays information about disk space usage on the file system.
                                                Example: df -h</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title11" id="du">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title11"><strong class="ph b">du</strong></h2>
                                            <div class="abstract glossdef">Definition: Estimates file space usage, showing the sizes of directories and their contents.
                                                Example: du -sh /path/to/directory</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title12" id="echo">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title12"><strong class="ph b">echo</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays a specified message or variable to the terminal.
                                                Example: echo "Hello, World!"</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title13" id="find">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title13"><strong class="ph b">find</strong></h2>
                                            <div class="abstract glossdef">Definition: Searches for files and directories in a directory hierarchy based on specified criteria.
                                                Example: find /path/to/search -name filename</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title14" id="grep">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title14"><strong class="ph b">grep</strong></h2>
                                            <div class="abstract glossdef">Definition: Searches for patterns in files, printing lines that match the specified criteria.
                                                Example: grep "pattern" file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title15" id="gzip">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title15"><strong class="ph b">gzip</strong></h2>
                                            <div class="abstract glossdef">Definition: Compresses or decompresses files. It is commonly used to reduce file size.
                                                Example: gzip file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title16" id="head">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title16"><strong class="ph b">head</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays the first few lines of a file.
                                                Example: head -n 5 file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title17" id="hostname">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title17"><strong class="ph b">hostname</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays or sets the system's host name.
                                                Example: hostname</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title18" id="kill">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title18"><strong class="ph b">kill</strong></h2>
                                            <div class="abstract glossdef">Definition: Sends a signal to a process, terminating it. The -9 option forces the process to exit.
                                                Example: kill -9 process_id</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title19" id="less">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title19"><strong class="ph b">less</strong></h2>
                                            <div class="abstract glossdef">Definition: Allows viewing files one screen at a time, providing convenient navigation.
                                                Example: less file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title20" id="ls">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title20"><strong class="ph b">ls</strong></h2>
                                            <div class="abstract glossdef">Definition: Lists files and directories in the current directory.
                                                Example: ls -l</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title21" id="man">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title21"><strong class="ph b">man</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays the manual or documentation for a specified command.
                                                Example: man command</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title22" id="mkdir">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title22"><strong class="ph b">mkdir</strong></h2>
                                            <div class="abstract glossdef">Definition: Creates a new directory.
                                                Example: mkdir new_directory</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title23" id="mv">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title23"><strong class="ph b">mv</strong></h2>
                                            <div class="abstract glossdef">Definition: Moves or renames files and directories.
                                                Example: mv oldfile.txt new_location/</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title24" id="nano">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title24"><strong class="ph b">nano</strong></h2>
                                            <div class="abstract glossdef">Definition: A simple text editor for the command line.
                                                Example: nano file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title25" id="netstat">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title25"><strong class="ph b">netstat</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays network connections, routing tables, interface statistics, masquerade connections, etc.
                                                Example: netstat -an</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title26" id="ps">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title26"><strong class="ph b">ps</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays information about processes running on the system.
                                                Example: ps aux</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title27" id="pwd">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title27"><strong class="ph b">pwd</strong></h2>
                                            <div class="abstract glossdef">Definition: Prints the current working directory.
                                                Example: pwd</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title28" id="rm">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title28"><strong class="ph b">rm</strong></h2>
                                            <div class="abstract glossdef">Definition: Removes or deletes files and directories.
                                                Example: rm file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title29" id="rmdir">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title29"><strong class="ph b">rmdir</strong></h2>
                                            <div class="abstract glossdef">Definition: Removes an empty directory.
                                                Example: rmdir empty_directory</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title30" id="rsync">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title30"><strong class="ph b">rsync</strong></h2>
                                            <div class="abstract glossdef">Definition: Syncs files and directories between two locations while minimizing data transfer.
                                                Example: rsync -av source/ destination/</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title31" id="scp">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title31"><strong class="ph b">scp</strong></h2>
                                            <div class="abstract glossdef">Definition: Securely copies files between hosts over an SSH connection.
                                                Example: scp file.txt user@remote:/path/to/destination/</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title32" id="sed">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title32"><strong class="ph b">sed</strong></h2>
                                            <div class="abstract glossdef">Definition: Stream editor for filtering and transforming text.
                                                Example: sed 's/old/new/' file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title33" id="service">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title33"><strong class="ph b">service</strong></h2>
                                            <div class="abstract glossdef">Definition: Used to control services on the system, such as starting or stopping a service.
                                                Example: sudo service apache2 restart</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title34" id="sort">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title34"><strong class="ph b">sort</strong></h2>
                                            <div class="abstract glossdef">Definition: Sorts lines of text files.
                                                Example: sort file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title35" id="ssh">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title35"><strong class="ph b">ssh</strong></h2>
                                            <div class="abstract glossdef">Definition: Connects to a remote server using the secure shell protocol.
                                                Example: ssh user@hostname</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title36" id="systemctl">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title36"><strong class="ph b">systemctl</strong></h2>
                                            <div class="abstract glossdef">Definition: Controls and manages the systemd system and service manager.
                                                Example: sudo systemctl start service</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title37" id="tail">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title37"><strong class="ph b">tail</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays the last few lines of a file.
                                                Example: tail -n 10 file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title38" id="tar">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title38"><strong class="ph b">tar</strong></h2>
                                            <div class="abstract glossdef">Definition: Creates compressed or uncompressed archive files.
                                                Example: tar -cvzf archive.tar.gz directory/</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title39" id="top">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title39"><strong class="ph b">top</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays real-time information about system resource usage.
                                                Example: top</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title40" id="touch">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title40"><strong class="ph b">touch</strong></h2>
                                            <div class="abstract glossdef">Definition: Creates an empty file or updates the access and modification times of an existing file.
                                                Example: touch newfile.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title41" id="uname">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title41"><strong class="ph b">uname</strong></h2>
                                            <div class="abstract glossdef">Definition: Prints system information such as the kernel name, version, and machine.
                                                Example: uname -a</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title42" id="uniq">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title42"><strong class="ph b">uniq</strong></h2>
                                            <div class="abstract glossdef">Definition: Filters out repeated lines in a sorted file.
                                                Example: uniq file.txt</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title43" id="uptime">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title43"><strong class="ph b">uptime</strong></h2>
                                            <div class="abstract glossdef">Definition: Displays how long the system has been running and the current system load.
                                                Example: uptime</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title44" id="useradd">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title44"><strong class="ph b">useradd</strong></h2>
                                            <div class="abstract glossdef">Definition: Adds a new user account to the system.
                                                Example: sudo useradd newuser</div>
                                        </article>

                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title45" id="usermod">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title45"><strong class="ph b">usermod</strong></h2>
                                            <div class="abstract glossdef">Definition: Modifies an existing user account, including group membership.
                                                Example: sudo usermod -aG groupname username</div>
                                        </article>
                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title46" id="vi">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title46"><strong class="ph b">vi</strong></h2>
                                            <div class="abstract glossdef">Definition: A text editor with both command and insert modes.
                                                Example: vi filename</div>
                                        </article>
                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title47" id="wc">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title47"><strong class="ph b">wc</strong></h2>
                                            <div class="abstract glossdef">Definition: Counts the number of lines, words, and characters in a file.
                                                Example: wc -l file.txt</div>
                                        </article>
                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title48" id="wget">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title48"><strong class="ph b">wget</strong></h2>
                                            <div class="abstract glossdef">Definition: Retrieves files from the internet using the HTTP, HTTPS, or FTP protocols.
                                                Example: wget https://example.com/file.txt</div>
                                        </article>
                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title49" id="whereis">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title49"><strong class="ph b">whereis</strong></h2>
                                            <div class="abstract glossdef">Definition: Locates the binary, source, and manual page files for a command.
                                                Example: whereis command</div>
                                        </article>
                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title50" id="which">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title50"><strong class="ph b">which</strong></h2>
                                            <div class="abstract glossdef">Definition: Shows the full path of the executable related to the provided command.
                                                Example: which command</div>
                                        </article>
                                        <article class="topic concept glossentry nested1" aria-labelledby="ariaid-title51" id="zip">
                                            <h2 class="title glossterm topictitle2" id="ariaid-title51"><strong class="ph b">zip</strong></h2>
                                            <div class="abstract glossdef">Definition: Compresses files into a zip archive.
                                                Example: zip -r archive.zip directory/</div>
                                        </article>
                                        <br>
                                        <br>
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




