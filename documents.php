<?php
    require_once ('.things.php');
?>

<div class="contentcentre">
    <h1>STEP Documents</h1>
    <p>This documents page contains links to documents such as meeting minutes which are freely available for anyone to download. Click through the panels to select the document type to find the right document.</p>
</div>
<div id="SpryAccordion1" class="Accordion" tabindex="0">
<div class="AccordionPanel">
    <div class="AccordionPanelTab">Accessing STEP documents</div>
    <div class="AccordionPanelContent">
        <div class="acontent">
            <table>
                <tr>
                    <td style="vertical-align:top;"><p><b>You are a visitor.</b></p></td>
                    <td><p>Everyone gets read-only access to our public documents.</p>
                        <p>You may view <a href="http://www.step.uwaterloo.ca/documents/.index3.php">these files</a>.</p>
                        <p>&nbsp;</p></td>
                </tr>
                <tr>
                    <td style="vertical-align:top;"><p><b>You are a volunteer.</b></p></td>
                    <td><p>Volunteers get write access to all public documents and read only access for private documents.</p>
                        <p>This feature is not yet implemented.</p>
                        <p>&nbsp;</p></td>
                </tr>
                <tr>
                    <td style="vertical-align:top;"><p><b>You are a STEP leader.</b></p></td>
                    <td><p><b>Web interface method</b></p>
                        <p>Leaders have access to the <a href="documents/.index2.php">Web interface</a>. They can read and write to any folder.</p>
                        <p>&nbsp;</p>
                        <p><b>File transfer method</b></p>
                        <ul>
                            <li>Get <a href="http://winscp.net/eng/download.php">WinSCP</a> or <a href="http://filezilla-project.org/download.php">Filezilla</a>.</li>
                            <li>Connect to <b>mecheng1.uwaterloo.ca</b> with username <b>step</b> and password.</li>
                            <li>You can now use the server as a file storage.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p><b>Mapping it as a network drive permamently: Windows</b></p>
                        <ul>
                            <li>Download and extract <a href="/upload/mindterm_3.4-bin.zip">mindTerm</a></li>
                            <li>Run mindterm.jar (double click it if you can, otherwise in command prompt type in java -jar mindterm.jar)</li>
                            <li>Type <b>mecheng1.uwaterloo.ca</b> as the server, followed by the username <b>step</b>) and password (ask me for it)</li>
                            <li>In the menu click on Plugins &gt; FTP To SFTP Bridge…</li>
                            <li>Type in 127.0.0.1 for the Listen address</li>
                            <li>Type in 21 for the Listen port</li>
                            <li>Select the Remote system type (UNIX or Linux)</li>
                            <li>Click Enable</li>
                            <li>Click Dismiss</li>
                            <li>Next we want to install <a href="/upload/NetDrive-SETUP.exe">NetDrive</a></li>
                            <li>Once netdrive is installed, open it up, and click New Site on the bottom</li>
                            <li>Type in &quot;STEP&quot; for the Site name</li>
                            <li>Type in localhost for the Site IP</li>
                            <li>Type in 21 for the Port</li>
                            <li>Select FTP for the Port</li>
                            <li>Select a Drive letter</li>
                            <li>Check Connect as anonymous</li>
                            <li>Click Save</li>
                            <li>Click Connect</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p><b>Mapping it as a network drive permamently: Linux</b></p>
                        These instructions are based on Ubuntu 10.04 LTS.
                        <ul>
                            <li>Open nautilus, and click on File &gt; Connect to Server...</li>
                            <li>Select <b>SSH</b> as the service type.</li>
                            <li>Type <b>mecheng1.uwaterloo.ca</b> as the server, followed by the username <b>step</b>) and password (ask me for it)</li>
                            <li>Click Connect</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p><b>Mapping it as a network drive permamently: Mac OS X</b></p>
                        I heard from Mac users that Macs are so easy to use. They will be able to figure this out in no time. </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="AccordionPanel">
<div class="AccordionPanelTab">Meeting Minutes</div>
<div class="AccordionPanelContent">
    <div class="acontent">
        <p>This panel contains links to meeting minutes from current and past terms.</p>
        <ul class="mktree">
            <li><strong>Winter 2011 Meeting Minutes</strong><br />
                <ul>
                    <li><a href="Meeting Minutes/Meeting Minutes - Winter 2011/March 1st 2011.docx">STEP - Leader Meeting March 1st, 2011</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Winter 2011/March 8th 2011.docx">STEP - Leader Meeting March 8th, 2011</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Winter 2011/March 15th 2011.docx">STEP - Leader Meeting March 15th, 2011</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Winter 2011/Leader Meeting Minutes Tuesday Feb 8th 2011.docx">STEP - Leader Meeting February 8th, 2011</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Winter 2011/Feb 1st Leader Meeting.docx">STEP - Leader Meeting February 1st, 2011</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Winter 2011/January 25th.docx">STEP - Leader Meeting January 25th, 2011</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Winter 2011/January 18.docx">STEP - Leader Meeting January 18th, 2011</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Winter 2011/Tuesday January 11.docx">STEP - Leaders Meeting January 11th, 2011</a></li>
                </ul>
                <br />
            </li>
            <li><strong>Fall 2010 Meeting Minutes</strong><br />
                <ul>
                    <li><a href="Meeting Minutes/Meeting Minutes - Fall 2010/STEP - General Meeting October 12th, 2010.docx">STEP - General Meeting October 12th, 2010</a><br />
                    </li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Fall 2010/STEP - First General Meeting, Tuesday September 28th, 2010.pdf.docx">STEP - First General Meeting, Tuesday September 28th, 2010</a><br />
                    </li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Fall 2010/STEP - General Meeting October 19th, 2010.docx">STEP - General Meeting October 19th, 2010</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Fall 2010/STEP - Weekly Meeting November 9th, 2010.docx">STEP - Weekly Meeting November 9th, 2010</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Fall 2010/STEP - General Meeting November 30th, 2010.docx">STEP - General Meeting November 30th, 2010</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Fall 2010/STEP - End of Term Organizational Structure.jpg">STEP - End of Term Organizational Structure</a></li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Fall 2010/STEP - End of Term Leader and Project Development Overview.docx">STEP - End of Term Leader and Project Development Overview</a></li>
                </ul>
                <br />
            </li>
            <li><strong>Spring 2010 Meeting Minutes</strong><br />
                <ul>
                    <li><a href="Meeting Minutes/Meeting Minutes - Spring 2010/STEP Beginning of Term Summary - May 11th, 2010.pdf">STEP Beginning of Term Summary - May 11th, 2010</a><br />
                    </li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Spring 2010/STEP General Meeting-May 19th, 2010.pdf">STEP General Meeting - May 19th, 2010</a><br />
                    </li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Spring 2010/STEP Leader Meeting-May 11th, 2010.pdf">STEP Leader Meeting - May 11th, 2010</a><br />
                    </li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Spring 2010/STEP Leader Meeting-July 6th, 2010.pdf">STEP Leader Meeting - July 6th, 2010</a><br />
                    </li>
                    <li><a href="Meeting Minutes/Meeting Minutes - Spring 2010/STEP Leader Meeting-July 7th, 2010.pdf">STEP Leader Meeting - July 7th, 2010</a><br />
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<?php
    page_out (array ());
?>
