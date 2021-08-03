@extends('layouts.app')

@section('title')
Privacy Policy | Niel Eche&trade;
@endsection

@section('content')
@php( $abouts = \App\Models\Abouts::all() )

<section style="background-color: #000 !important;">
   <section>
    <div class="container-fluid bg-black">
        <div class="">
            <div class="bio text-right">
                <button class="btn biobtn"> <span>X</span></button>
            </div>
            <div style="background-color:#000 !important; color:#4AF626 !important;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 biodetails">
                <div id="niel" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    @foreach($abouts as $key => $about)
                    <p style="font-size:11px;">
                        {{ $about->about_text }}
                    </p>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                    <h3 class="marquee"> <span> Niel Eche&trade;</span></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="text-right outerlinks nopadding">
            
            <div style="padding-right:0px;" class="links">
                <img style="width:75px; height:auto;" src="https://media.giphy.com/media/12W5Sg2koWYnwA/giphy.gif" alt="A Niel Eche image">
               
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid pp">
        <h3>DUMMY CHARACTERS WEBSITE PRIVACY POLICIES</h3>
        <ul class="legal-index nopadding">
            <li><a href="#1"><strong>SCOPE OF THIS PRIVACY POLICY</strong></a></li>
            <li><a href="#2"><strong>INFORMATION WE COLLECT ABOUT YOU</strong></a></li>
            <li><a href="#3"><strong>HOW WE USE YOUR INFORMATION</strong></a>
            <ul>
            <li><strong><a href="#3a">COOKIE POLICY</a></strong></li>
            </ul>
            </li>
            <li><a href="#4"><strong>LINKS TO THIRD-PARTY WEBSITES AND SOCIAL MEDIA FEATURES</strong></a></li>
            <li><a href="#5"><strong>OUR RIGHT TO CONTACT YOU</strong></a></li>
            <li><a href="#6"><strong>INFORMATION PROTECTION</strong></a></li>
            <li><a href="#7"><strong>CONSENT TO TRANSFER</strong></a></li>
            <li><a href="#8"><strong>DATA SUBJECT RIGHTS</strong></a></li>
            <li><a href="#9"><strong>OPT OUT</strong></a></li>
            <li><a href="#10"><strong>CHILDREN’S INFORMATION</strong></a></li>
            <li><a href="#11"><strong>CHANGES TO THIS PRIVACY POLICY</strong></a></li>
            <li><a href="#12"><strong>QUESTIONS</strong></a></li>
        </ul>

        <div id="primary-content" class="clearafter">
            <p>Dummy Characters (hereinafter “us,” “we,” “our,” or “Company”) has created the following Privacy Policy for when you visit our website: dummy-characters.com (hereinafter the “Website”).&nbsp; This Privacy Policy describes, among other things, the types of information we collect about you when you visit and use our Website, how we use it, and how you can access your information.</p>
                            <p>This Privacy Policy is governed by our <a href="tandc.php"> Dummy Characters Terms and Conditions of Use</a>, which is also available on our Website.&nbsp; If there are inconsistencies between our Privacy Policy and the Terms and Conditions of Use, the Privacy Policy controls.</p>
                            <p><a name="1"></a><br>
                            <strong>I. SCOPE OF THIS PRIVACY POLICY</strong></p>
                            <p>This Privacy Policy applies to all information that you provide to us and that we process, whether you provide the information through our Website, or through other means.</p>
                            <p><a name="2"></a><br>
                            <strong>II. INFORMATION WE COLLECT ABOUT YOU</strong></p>
                            <p>We may collect the following types of information about you which are described in more detail below: (A) information you provide to us, (B) information we may automatically collect, and (C) information we may receive from third parties.&nbsp; All of the information listed in (A)-(C) above, are detailed below, and hereinafter referred to as “Information.” &nbsp;This Privacy Policy places no restriction on the use of Information that has been de-identified or anonymized.</p>
                            <ol>
                            <li class="row-spaced"><u>Information You Provide To Us</u>:<br>
                            You may provide your Information to us in contacting us about the Website.&nbsp; For example, you may call or email us about the Website although we do not affirmatively seek to collect any direct information from you from the Website.</li>
                            <li><u>Information We May Automatically Collect About You</u>: Our Website may automatically and passively collect Information about you from your visit to our Website.&nbsp; We use this Information to help us design our site to better suit our users’ needs.&nbsp; This Information may include:</li>
                            </ol>
                            <ol class="indent-1">
                            <li>IP address;</li>
                            <li>Your geographic location;</li>
                            <li>Date and time of your visit;</li>
                            <li>Domain server;</li>
                            <li>Type of computer, web browsers, search engine used, operating system, or platform or web browser you use;</li>
                            <li>Data identifying the web pages you visited prior to and after visiting our Website; and/or</li>
                            <li>Your movement and activity within the Website, which is aggregated with other information.</li>
                            </ol>
                            <p>We use a few different technologies to collect this Information:<br>
                            <a name="3a"></a><br>
                            COOKIES<br>
                            The Website may place small files, called “cookies” onto your computer. Cookies are data files that websites write onto computer hard drives for record keeping purposes when you visit them. The cookie file then identifies you as a unique user. Cookies make your use of these Website more pleasing and efficient by “personalizing” your Website experience and gathering Website statistical data, such as which parts of the Website you have previously visited, what material you downloaded, your Internet provider’s domain name and country, and the addresses of websites you visited immediately before and after our Website. They enable us to tailor the information you receive and to assist us and other third-party service providers with whom we have relationships by identifying you as our customer or Website user. The various types of cookies we use include:</p>
                            <ul>
                            <li style="list-style-type: none;">
                            <ul class="spaced">
                            <li><em>Session Cookies:</em> Session cookies are temporary and are deleted as soon as you close your browser.</li>
                            <li><em>Analytical Cookies</em>: We use analytical cookies to collect information about how visitors use our Website. These cookies collect information in the aggregate to give us insight into how our Website is being used.</li>
                            <li><em>Performance Cookies</em>:&nbsp;Performance cookies measure how often you visit our Website and how you use the site. We use this information to get a better sense of how our users engage with our Website and to improve our Website, so that users have a better experience.</li>
                            <li><em>Managing Cookie Preferences:</em> Most web browsers automatically accept cookies, unless you have configured yours not to accept them. You can program your browser not to accept cookies, but if you do, you may not be able to use certain portions of the Website and the Website will not be able to customize certain features according to your preferences. You may change and manage your cookie preferences through your browser’s settings:
                            <ul>
                            <li><strong>Through your Browser Settings</strong>: If you wish to block or delete the cookies received from our Website or any other website, you can do so by changing your browser’s settings.&nbsp; You can find below the links to the instructions of the following browsers:</li>
                            <li>Internet Explorer – <a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="noopener">https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies</a></li>
                            <li>Chrome – <a href="https://support.google.com/chrome/answer/95647?hl=en" target="_blank" rel="noopener">https://support.google.com/chrome/answer/95647?hl=en</a></li>
                            <li>Firefox – <a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences" target="_blank" rel="noopener">https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences</a></li>
                            <li>Opera – <a href="https://help.opera.com/en/latest/web-preferences/#cookies" target="_blank" rel="noopener">https://help.opera.com/en/latest/web-preferences/#cookies</a></li>
                            <li>Safari – <a href="https://support.apple.com/kb/PH17191?locale=en_US" target="_blank" rel="noopener">http://support.apple.com/kb/PH17191</a></li>
                            </ul>
                            </li>
                         
                            </ul>
                            </li>
                            </ul>
                            <ol>
                            <li><u>Information We May Receive from Third-Parties<br>
                            </u>We may collect additional Information about you from third-party websites, social media platforms, and/or sources providing publicly-available information to help us provide services to you.</li>
                            </ol>
                            <p><a name="3"></a><br>
                            <strong>III. HOW WE USE YOUR INFORMATION</strong></p>
                            <ol>
                            <li><u><u>Use and Purpose of Processing Your Information:</u></u> We use and process your Information above for things that may include, but are not limited to, the following:
                            <ol>
                            <li>To respond to your inquiries and provide you with requested information;</li>
                            <li>Communicate with you regarding our services, provided that you have not already opted-out of receiving such communications;</li>
                            <li>Improve our Website and resolve any technical problems;</li>
                            <li>Provide targeted advertisements to you;</li>
                            <li>Comply with our Terms and Conditions of Use;</li>
                            <li>Comply with any applicable laws and regulations and respond to lawful requests; and/or</li>
                            <li>For any other purposes disclosed to you at the time we collect your Information and/or pursuant to your consent.</li>
                            </ol>
                            </li>
                            <li><u>Lawful Basis For Processing Your Information<br>
                            </u>We believe the foregoing handling of your Information furthers our legitimate interests in commercial activities that are not overridden by the interest or fundamental rights and freedoms of the individuals at issue. &nbsp;Depending on what Information we collect from you and how we collect it, we rely on various grounds for processing your Information, including the following reasons:<p></p>
                            <ol>
                            <li>In order to administer our contractual relationship, including setting up any services you may request;</li>
                            <li>Because it is in our legitimate interest to effectively and efficiently operate our business and provide you with the services offered through the Website and other useful content and for other marketing, design, and advertising purposes;</li>
                            <li>In order to fulfill any legal obligations we may have to collect this Information from you; and/or</li>
                            <li>Because you have provided your consent for us to do so.</li>
                            </ol>
                            </li>
                            <li class="row-spaced"><u>How Long We Keep Your Information<br>
                            </u>We generally keep Information for so long as it may be relevant to the purposes listed above, consistent with any applicable laws and agreements. &nbsp;To dispose of Information, we may anonymize it, delete it, or take other appropriate steps. &nbsp;Information may persist in copies made for backup and business continuity purposes for an additional time.</li>
                            <li><u>Sharing Your Information<br>
                            </u>We may share your Information as disclosed at the time you provide your Information, as set forth in the Privacy Policy and in the following circumstances:</li>
                            </ol>
                            <ul class="spaced">
                            <li><strong>Third-Party Service Providers</strong><strong>.</strong> &nbsp;In some cases we may employ third-party service providers to perform certain services on our behalf, including, without limitation: (i) processing and hosting your Information for customer and user data management and analytics; (ii) providing customer service; (iii) shipping or sending postal mail, texts, and/or e-mails; (iv) analyzing, updating, and correcting information we receive on the Website; (v) performing business analysis, data processing, and/or quality control; (vi) providing marketing assistance, search results, and links (including, without limitation, paid listings and links); and (vii) providing you with information you request. Consequently, we may share your Information with these third-party service providers if they need it to perform services on our behalf.&nbsp; Our contracts with such third-party service providers prohibit them from using any of your personal information for any purpose beyond the purpose for which it was shared.</li>
                            <li><strong>Disclosure of Information for Legal and Administrative Reasons</strong><strong>.</strong> &nbsp;We may disclose your Information without notice: (i) when required by law or to comply with a court order, subpoena, search warrant, or other legal process; (ii) to cooperate or undertake an internal or external investigation or audit; (iii) to comply with legal, regulatory or administrative requirements of governmental authorities (including, without limitation, requests from the governmental agency authorities to view your Information); (iv) to protect and defend the rights, property or safety of us, our subsidiaries and affiliates and any of their officers, directors, employees, attorneys, agents, contractors and partners, and the Website’s users; (v) to enforce or apply the Website’s Terms and Conditions of Use; and (vi) to verify the identity of the Website’s users.</li>
                            <li><strong>Business Transfers</strong><strong>.</strong> Your Information may be transferred, sold or otherwise conveyed (“Conveyed”) to a third-party where we: (i) merge with or are acquired by another business entity; (ii) sell all or substantially all of our assets; (iii) are adjudicated bankrupt; or (iv) are liquidated or otherwise reorganize.&nbsp; You agree to any and all such Conveyances of your Information.</li>
                            <li><strong>Online Postings.</strong> If you chose to share with us comments, postings, photos, testimonials, or other Information you agree that we may make it available generally to the public and it will not be returned to you unless we receive such a request.</li>
                            </ul>
                            <p>Except as provided in this Privacy Policy, we will not sell, rent, or license your Information we have collected to any third-party without your consent.</p>
                            <p><a name="4"></a><br>
                            <strong>IV. LINKS TO THIRD-PARTY WEBSITES AND SOCIAL MEDIA FEATURES</strong></p>
                            <p>Our Website may interface with social media sites such as Instagram, Twitter, YouTube, SoundCloud, Google Calendar, WhatsApp and Facebook. &nbsp;We are not responsible for the privacy and security practices of those websites or social media platforms or the information they may collect (which may include IP address).&nbsp; You should contact such third-parties directly to determine their respective privacy policies.&nbsp; Links to any other party’s website or content do not constitute or imply an endorsement or recommendation by us of the linked website, social media platform, and/or content.</p>
                            <p><a name="5"></a><br>
                            <strong>V. OUR RIGHT TO CONTACT YOU</strong></p>
                            <p>We may contact Website visitors or users who provide us Information regarding account status, privacy statement, or any other policies or agreements relevant to site visitors.&nbsp; We may contact you by way of text, email, or telephone and you agree to us contacting you in these matters concerning our Website or related services or information for which we believe you may be interested.</p>
                            <p><a name="6"></a><br>
                            <strong>VI. INFORMATION PROTECTION</strong></p>
                            <p>We use industry-standard procedures and various technical, administrative and physical safeguards to help protect the confidentiality of your Information.&nbsp; However, you should assume that no data transmitted over the Internet or stored or maintained by us or our third-party service providers can be 100% secure.&nbsp; Therefore, although we believe the measures implemented by us reduce the likelihood of security problems to a level appropriate to the type of data involved, we do not promise or guarantee, and you should not expect, that your Information or private communications will always remain private or secure.&nbsp; We do not guarantee that your information will not be misused by third-parties. &nbsp;We will not have any liability for misuse, access, acquisition, deletion, or disclosure of your Information.</p>
                            <p>If you believe that your Information has been accessed or acquired by an unauthorized person, you shall promptly notify us so that necessary measures can quickly be taken.</p>
                            <p><a name="7"></a><br>
                            <strong>VII. CONSENT TO TRANSFER</strong></p>
                            <p>In order to provide services to you related to our Website we may need to process or transfer your Information in countries that may not provide a level of protection of personal information that may be regarded as equivalent to that afforded under the European data protection legislation. Whenever your Information is transferred internationally, we will take appropriate steps in accordance with applicable data protection law.</p>
                            <p><a name="8"></a><br>
                            <strong>VIII. DATA SUBJECT RIGHTS</strong></p>
                            <p>To the extent certain data protection laws apply and we hold your Information in our capacity as a data controller as defined under those laws, you may request that we:</p>
                            <ol>
                            <li>Restrict the way that we process and disclose your Information;</li>
                            <li>Transfer your Information to a third-party;</li>
                            <li>Revoke your consent for processing of your Information;</li>
                            <li>Provide you with access to your Information;</li>
                            <li>Remove your Information if no longer necessary for the purposes collected;</li>
                            <li>Prevent the processing of your Information for direct-marketing purposes;</li>
                            <li>Update your Information so it is correct and not out of date; and/or</li>
                            <li>Object to our processing of your Information.</li>
                            </ol>
                            <p>You can make the above requests by contacting us in the following ways:</p>
                            <ol>
                            <li>E-mail us at: <a href="mailto:info@dummy-characters.com">info@dummmy-characters.com</a></li>
                            <li>Mail us at: Dummy Characters<br>
                            c/o Loudhouse <br>
                            Port Harcourt</li>
                            </ol>
                            <p>The requests above will be considered and responded to in the time-period stated by applicable law.&nbsp; Note, certain Information may be exempt from such requests. &nbsp;We may require additional Information from you to confirm your identity in responding to such requests.&nbsp; You have the right to lodge a complaint with the supervisory authorities applicable to you and your situation, although we invite you to contact us with any concern as we would be happy to try and resolve it directly.</p>
                            <p>In accordance with our routine record keeping, we may delete certain records that contain Information you have submitted through the Website.&nbsp; We are under no obligation to store such Information indefinitely and disclaim any liability arising out of, or related to, the destruction of such Information.</p>
                            <p><a name="9"></a><br>
                            <strong>IX. OPT OUT</strong></p>
                            <p>If you wish to withdraw consent to this Privacy Policy and use and processing of your Information, please contact us by:</p>
                            <ol>
                            <li>E-mail: <a href="mailto:info@dummy-characters.com">info@dummmy-characters.com</a></li>
                            <li>Mail: Dummy Characters<br>
                            c/o Loudhouse <br>
                            Port Harcourt</li>
                            </ol>
                            <p><a name="10"></a><br>
                            <strong>X. CHILDREN’S INFORMATION</strong></p>
                            <p>The Website is intended only for users over the age of eighteen (18).&nbsp; If we become aware that a user is under thirteen (13) (or a higher age threshold where applicable) and has provided us with Information, we will take steps to comply with any applicable legal requirement to remove such Information.&nbsp; Contact us if you believe that we have mistakenly or unintentionally collected Information from a child under the age of thirteen (13).</p>
                            <p><a name="11"></a><br>
                            <strong>XI. CHANGES TO THIS PRIVACY POLICY</strong></p>
                            <p>We reserve the right to change, modify or amend this Privacy Policy at any time to reflect changes in our products and service offerings.&nbsp; If we modify our Privacy Policy, we will update the “Effective Date” and such changes will be effective upon posting.&nbsp; It is your obligation to check our current Privacy Policy for any changes.</p>
                            <p><a name="12"></a><br>
                            <strong>XII. QUESTIONS</strong></p>
                            <p>If you have any questions about this Privacy Policy, please send us an email at <a href="mailto:info@dummy-characters.com">info@dummmy-characters.com</a>
                            or write us at Dummy Characters, c/o Loudhouse
                            Port Harcourt</p>
                            <p>Last Updated on: May 5, 2020</p>
                    <div class="backhome">
                        <a style="font-weight:bolder; font-size:14px;" href="{{route('index')}}">Back to Dummy Characters homepage</a>
                    </div>
                </div>
    </div>
</section>
<br>
<br> 
</section>

@endsection
