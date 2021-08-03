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
            <h3>DUMMY CHARACTERS WEBSITE TERMS & CONDITIONS</h3>
            <ul class="legal-index nopadding">
                <li><a href="#1"><strong>GENERAL </strong><strong>CONDITIONS</strong></a></li>
                <li><a href="#2"><strong>NON-EXCLUSIVE</strong><strong>, NON-TRASNFERABLE LICENSE</strong></a><br>
                <strong>TO USE OUR WEBSITE</strong></li>
                <li><a href="#3"><strong>INTELLECTUAL PROPERTY</strong></a></li>
                <li><a href="#4"><strong>PROHIBITED</strong><strong> USES</strong></a></li>
                <li><a href="#5"><strong>CHILDREN’S </strong><strong>INFORMATION</strong></a></li>
                <li><a href="#6"><strong>ACCURACY, COMPLETENESS</strong><strong> &amp; TIMELINESS OF INFORMATION</strong></a></li>
                <li><a href="#7"><strong>WARRANTY</strong><strong> DISCLAIMER</strong></a></li>
                <li><a href="#8"><strong>GOVERNING</strong><strong> LAW</strong></a></li>
                <li><a href="#9"><strong>ARBITRATION CLAUSE AND CLASS ACTION WAIVER – IMPORTANT – PLEASE REVIEW AS THIS AFFECTS YOUR LEGAL RIGHTS</strong></a></li>
                <li><a href="#10"><strong>SEVERABILITY</strong></a></li>
                <li><a href="#11"><strong>TERMINATION</strong></a></li>
                <li><a href="#12"><strong>INDEMNIFICATION</strong></a></li>
                <li><a href="#13"><strong>NO THIRD</strong><strong>-PARTY BENEFICIARIES</strong></a></li>
                <li><a href="#14"><strong>CHANGES TO THESE TERMS &amp; CONDITIONS</strong></a></li>
                <li><a href="#15"><strong>QUESTIONS</strong></a></li>
            </ul>

            <div id="primary-content" class="clearafter">
                <p>PLEASE READ THESE TERMS &amp; CONDITIONS CAREFULLY.</p>
                <p>Dummy Characters (“us,” “we,” “our,” or “Company”) have&nbsp;created the following Terms &amp; Conditions of Use for&nbsp;when you visit&nbsp;our website:&nbsp;dummy-characters.com (hereinafter referred to as&nbsp;the “Website”).&nbsp; We incorporate herein and refer to the <a href="https://canary---yellow.com/new/privacy-policy/">Privacy Policy</a> on our Website for information about the types of information we collect from you, how we use it, how you can control the use and disclosure of it, and how you may access and update information about you provided to us.<br>
                <a name="1"></a><br>
                <strong>I. GENERAL </strong><strong>CONDITIONS</strong></p>
                <p>Please read these Terms &amp; Conditions of Use (“Terms &amp; Conditions”) carefully before accessing or using the Website or the features contained within the Website (hereinafter referred to as the Website “Services”).&nbsp; By using our Website, you agree to be bound by the Terms &amp; Conditions, including the binding arbitration provision and class action waiver as described in Section IX.&nbsp; If you do not agree to the Terms &amp; Conditions, then you must not use the Website.&nbsp; If you violate the Terms &amp; Conditions, we reserve the right to deny you access to the Website, together with any and all other legal remedies. &nbsp;If there are inconsistencies between our Privacy Policy and the Terms &amp; Conditions, the Privacy Policy controls.</p>
                <p>The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms &amp; Conditions.</p>
                <p><a name="2"></a><br>
                <strong>II. NON-EXCLUSIVE</strong><strong>, NON-TRASNFERABLE LICENSE</strong><br>
                <strong>TO USE OUR WEBSITE</strong></p>
                <p>We grant you a limited, revocable, non-exclusive, non-transferable license to review and in some instances print content, on the Website for your personal and educational purposes as long as they do not violate any aspect of these Terms &amp; Conditions or applicable law, including our intellectual property or the intellectual property rights of another party.&nbsp; We reserve the right to terminate or limit your access to the Website and/or the licenses granted herein for any reason and in our sole discretion.</p>
                <p>We reserve the right to, at any time, temporarily or permanently, modify or discontinue any features associated with the Services with or without notice and for any reason, including performing maintenance, repairs or upgrades.&nbsp; We will endeavor to provide notice before any scheduled upgrades.&nbsp; We (and our licensors) remain the sole owner of all rights, title, and interest in the Services.</p>
                <p><a name="3"></a><br>
                <strong>III. INTELLECTUAL PROPERTY</strong></p>
                <p>All Website content, including but not limited to design, artwork, hyperlinks, text, videos, calendars, software, images, technical drawings, blog posts, podcasts, audio, images, configurations, graphics, other files, and their selection and arrangement (“Materials”) are either the proprietary property of us, our affiliates, or licensors.&nbsp; We reserve any and all rights to the Materials.&nbsp; The Materials may not be modified, copied, distributed, framed, reproduced, republished, downloaded, displayed, posted, transmitted, or sold in any form or by any means in whole or part without our prior written permission except you may download and print Materials for uses that are not competitive with or derogatory to us, provided that you keep all copyright or other proprietary notices intact.&nbsp; Please note that this limited consent may be revoked at any time by us and does not include consent to republish Materials on the Internet, or any Intranet or Extranet site, or to incorporate the Materials in any data base or other compilation.&nbsp; Any other use of the Materials is strictly prohibited.&nbsp; You further agree that you will not systematically extract, collect or harvest through electronic means or otherwise, any data or data fields from the Website, including but not limited to customer identities.</p>
                <p>All registered and unregistered trademarks on the Website are trademarks of Company, or licensors and may not be copied, imitated, or used in whole or in part without the prior written permission of Company, or its owners.&nbsp; All page headers, customer graphics, button icons, and scripts are service marks, trademarks, and carefully before accessing or using the Website or the features contained within the Website, such as accessing the Website itself, using online forms or trade dress of ours or our affiliates and may not be copied, imitated or used in whole or in part without prior written permission of us.</p>
                <p><a name="4"></a><br>
                <strong>IV. PROHIBITED</strong><strong> USES </strong></p>
                <p>In addition to other prohibitions as set forth in the Terms &amp; Conditions, you are prohibited from using the Website or its content: (a) for any unlawful or fraudulent purpose, including but not limited to, the use of fraudulent credit card information; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based upon gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Website (or related website, other websites, or the Internet) or Services; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, scrape or facilitate the use of any malware or ransomware; (j) for any damaging, obscene or immoral purpose; (k) to interfere with or circumvent the security features of the Website (or related website, other websites or the Internet) and/or Services; or (l) in any way that may be deemed a breach or violation of any of our Terms &amp; Conditions or Privacy Policy.&nbsp; We reserve the right to terminate your use of the Services or any related website for violating any of the prohibited uses.</p>
                <p><a name="5"></a><br>
                <strong>V. </strong><strong>CHILDREN’S </strong><strong>INFORMATION</strong></p>
                <p>The Website is intended only for users over the age of thirteen (13).</p>
                <p>We do not target our website to minors, who are under thirteen (13) (or a higher age threshold where applicable).&nbsp; You agree that you are not under thirteen (13) years of age. &nbsp;We do not intend to collect or process any information from anyone under the age of thirteen (13).&nbsp; If we become aware that a user is under thirteen (13) (or a higher age threshold where applicable) and has provided us with Information, we will take steps to comply with any applicable legal requirement to remove such Information. Contact us if you believe that we have mistakenly or unintentionally collected information from a person under the age of thirteen (13).</p>
                <p><a name="6"></a><br>
                <strong>VI. ACCURACY, COMPLETENESS</strong><strong> &amp; TIMELINESS OF INFORMATION</strong></p>
                <ol class="indent-1 spaced">
                <li><strong>Errors, Inaccuracies, &amp; Omissions<br>
                </strong>The Website may contain typographical errors, inaccuracies, or omissions that may relate to Company offerings, promotions, packages, programs, events, and materials.&nbsp; We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders or programs if any information about the Services or on any related Website is inaccurate at any time without prior notice (including after you have submitted your order, request, submission, payment, form, etc.).<br>
                We do not take on any obligation to update, amend, or clarify information in the Services or on any related website, including without limitation, pricing, dates, availability, location, products, services, except as required by law.<br>
                No specified update or refresh data applied in the Services or on any related website should be taken to indicate that all information in the Services or on any related website has been modified or updated.</li>
                <li><strong>Links to the Website<br>
                </strong>You may not create a link to any page of the Website without our prior written consent.&nbsp; If you do create a link to a page of this Website you do so at your own risk and the exclusions and limitations set out above will apply to your use of this Website by linking to it.</li>
                <li><strong>Links on the Website<br>
                </strong>The Website might include links to other websites or social media platforms.&nbsp; We are not responsible for examining or evaluating the content or accuracy of any other website and do not warrant and will not have any liability or responsibility for any other party’s materials or websites or for any other materials, products, or services of other websites.&nbsp; We are not liable for any harm or damages related to the purchase or use of goods, services, resources, content, or any other transactions made in connection with any other party’s websites.&nbsp; Please review carefully other party’s website’s policies and practices and make sure you understand them before you engage in any transaction.&nbsp; Claims, complaints, questions, or concerns regarding other parties should be directed to that party.</li>
                </ol>
                <p><a name="7"></a><br>
                <strong>VII. WARRANTY</strong><strong> DISCLAIMER</strong></p>
                <p>The information on the Website is provided on an “as is” basis without any representation, warranties, or conditions of any kind, either express or implied, including all implied warranties or condition of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement.&nbsp; We do not guarantee, represent or warrant that your use of the Website, or the Services, will be uninterrupted, timely, secure, or error-free.&nbsp; We do not warrant that the results that may be obtained from the use of the Services will be accurate or reliable.&nbsp; You agree that from time to time we may remove the Website and Services for indefinite periods of time or cancel them at any time without notice to you.&nbsp; To the fullest extent permitted by law, the Company excludes all representations and warranties relating to this Website and its contents and Services for which is or may be provided by any affiliates or any other third-party, including in relation to any inaccuracies or omissions in this Website and/or the Company’s literature.</p>
                <p>In no case shall the Company, its directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers or licensors be liable for any injury, loss claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including without limitation lost profits, lost revenue, lost savings, loss of data, damage caused to your computer, computer software, systems and programs and the data thereon, replacement costs, or any similar damages, whether based in contract, tort, strict liability or otherwise arising from your use of the Website or Services or in any way related to the Website and Services, including but not limited to any errors or omissions in any of the use of the Services or any content or product posted, transmitted, or otherwise made available.&nbsp; In any event, the aggregate liability of the Company and our service providers under these Terms &amp; Conditions shall not exceed five hundred dollars ($500.00).</p>
                <p>This Company does not however exclude liability for death or personal injury caused by its negligence.&nbsp; The above exclusions and limitations apply only to the extent permitted by law. None of your statutory rights as a consumer are affected.</p>
                <p><a name="8"></a><br>
                <strong>VIII. GOVERNING</strong><strong> LAW</strong></p>
                <p>The Terms &amp; Conditions and any separate agreements whereby we provide you Services shall be governed and construed in accordance with the laws of New York without reference to any conflict of laws rules.</p>
                <p>You agree that you will not use the Website or Services in any country or in any manner prohibited by any applicable laws, restrictions or regulations.</p>
                <p><a name="9"></a><br>
                <strong>IX. ARBITRATION CLAUSE AND CLASS ACTION WAIVER – IMPORTANT – PLEASE REVIEW AS THIS AFFECTS YOUR LEGAL RIGHTS</strong></p>
                <p>BINDING ARBITRATION NOTICE: You and Dummy Characters, agree that if there is any dispute or claim arising from or related to the Websites, our Services and/or these Terms &amp; Conditions will be resolved by confidential binding arbitration, rather than in court, after first making a good faith attempt in to settle such dispute by mediation administered by the American Arbitration Association (“AAA”) under its Commercial Mediation Procedures then in effect. At least thirty (30) days prior to commencing such mediation, the party seeking to mediate (the “Demanding Party”) shall first provide the other party written notice describing in detail the alleged claim (“Dispute”), the amount to which it intends to seek in the mediation, and supporting documentation available to the Demanding Party that is materially relevant to the dispute and then ten (10) days after such notice, the parties with authority shall have a phone call or in-person meeting to try to cure or resolve the Dispute.</p>
                <p>Any Dispute that has not been resolved by mediation within forty-five (45) days after initiation of the mediation procedure shall be resolved by confidential binding arbitration. There is no judge or jury in arbitration, and court review of an arbitration award is limited. However, an arbitrator can award on an individual basis the same damages and relief as a court (including injunctive and declaratory relief or statutory damages) and must follow the provisions of these Terms &amp; Conditions as a court would. YOU ACKNOWLEDGE THAT YOU ARE VOLUNTARILY AND KNOWINGLY FORFEITING YOUR RIGHT TO A TRIAL BY JURY AND TO OTHERWISE PROCEED IN A LAWSUIT IN STATE OR FEDERAL COURT.</p>
                <p>The Federal Arbitration Act and federal arbitration law apply and the American Arbitration Association (AAA) will administer the arbitration under its Commercial Arbitration Rules and the Supplementary Procedures for Consumer Related Disputes then in effect. Payment of all filing, administration and arbitrator fees will be governed by the AAA’s rules.</p>
                <p>CLASS ACTION WAIVER: YOU AND DUMMY CHARACTERS, AGREE THAT DISPUTES BETWEEN YOU AND US WILL BE RESOLVED BY BINDING, INDIVIDUAL ARBITRATION AND YOU WAIVE YOUR RIGHT TO PARTICIPATE IN A CLASS ACTION LAWSUIT OR CLASS-WIDE ARBITRATION. If for any reason a claim proceeds in court rather than in arbitration, we each waive any right to a jury trial. We also both agree that you or we may bring suit in court to enjoin infringement or other misuse of intellectual property rights.</p>
                <p><a name="10"></a><br>
                <strong>X. SEVERABILITY</strong></p>
                <p>To the extent that any provision of these Terms &amp; Conditions is found unenforceable, including the binding arbitration provision or class action waiver, the unenforceable provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms &amp; Conditions, such determination shall not affect the validity and enforceability of any other remaining provisions.</p>
                <p><a name="11"></a><br>
                <strong>XI. TERMINATION</strong></p>
                <p>These Terms &amp; Conditions are effective until terminated.&nbsp; We may terminate this agreement at any time without notice to you and may deny you access to the Website and Services.</p>
                <p><a name="12"></a><br>
                <strong>XII. INDEMNIFICATION</strong></p>
                <p>To the fullest extent permitted by law, and except to the extent arising from our negligence, recklessness, gross negligence, or intentional misconduct, you agree to indemnify, defend, and hold harmless the Company, and our parent, affiliates, partners, officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys’ fees made by any third-party due to or arising out of your breach of these Terms &amp; Conditions or the documents they incorporate by reference, or your violation of any law or rights of a third-party.&nbsp; We reserve the right to assume the exclusive defense and control of any matter otherwise subject to indemnification by you, in which event you shall cooperate with us in asserting any available defenses.&nbsp; You shall not settle any actions or claims on our behalf without our prior written consent.</p>
                <p><a name="13"></a><br>
                <strong>XIII. NO THIRD</strong><strong>-PARTY BENEFICIARIES</strong></p>
                <p>There are no third-party beneficiaries to the Terms &amp; Conditions.&nbsp; We shall have the right to assign our rights or delegate any of its responsibilities under these Terms &amp; Conditions to an affiliate or in connection with a merger, consolidation, or reorganization for the sale of substantially all of our assets.</p>
                <p><a name="14"></a><br>
                <strong>XIV. CHANGES</strong><strong> TO THESE TERMS &amp; CONDITIONS</strong></p>
                <p>We reserve the right to change, modify, or amend these Terms &amp; Conditions at any time to reflect changes in our practices and service offerings.&nbsp; If we modify our Terms &amp; Conditions, such changes will be effective upon posting.&nbsp; It is your obligation to check our current Terms &amp; Conditions for any changes.</p>
                <p>These Terms &amp; Conditions may only be modified in writing.&nbsp; Any ambiguities in the interpretation will not be construed against the drafter.</p>
                <p><a name="15"></a><br>
                <strong>XV. QUESTIONS</strong></p>
                <p>If you have any questions about these Terms &amp; Conditions, please send us an email at info@dummmy-characters.com, or write us at Dummy Characters,c/o Loudhouse ,Port Harcourt Nigeria</p>
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
