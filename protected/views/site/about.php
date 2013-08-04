<?php 
Yii::app()->clientScript->registerScript("menu_highlight",
   "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#about_us a').addClass('current');"
    , CClientScript::POS_END    
);
?>
<!--==============================content================================-->
<section id="content">
    <div class="padding-content">
        <div class="main">
            <div class="wrapper">
                <article>
                    <div class="row">
                        <div class="column" style="width: 433px"><h2 class="prev-indent-bot">About Us</h2></div>
                        <div class="clear"></div>
                    </div>
                    <section class="padding-top1">
                        <img src="images/about.png" align="left" style="padding: 0 30px 20px 0" />
                        <div id="services_tabs" class="column" style="width: 500px; padding: 0 0 15px 0">
                            <a href="team" class="tab_button">Leadership Team</a>
                        </div>
                        <h5 class="indent-bot">What personnel make up the SNT3 Consulting team?</h5>
                        <p class="justify">We bring top talent to each and every project. Our people drive our success, and they are genuinely committed to providing high-quality service to our clients. Our team members include our top industry resources as well as professionals with significant experience delivering large scale transformations at global organizations. Our senior leadership team will be composed of people who have successfully delivered multimillion dollar program in the Telecommunication, Finance, Utilities, Aviation, Energy and Defense industries.</p>
                        <div class="clear"></div>
                        <h5 class="indent-bot">Why Choose SNT3 Consulting?</h5>
                        <p class="justify">Ability to successfully execute a project according to plan is always one of the top three criteria cited by our customers as they select an outsourced software services provider. SNT3 Consulting mitigates this risk via a flexible and proven global delivery model. We work with you to achieve the right mix of on‐site/off‐site and off‐shore resources based on your project requirements. All of our teams are led by Project Managers and Technical Leads experienced in global delivery. This approach ensures on‐time and on‐budget delivery while reducing the overall project cost and delivering a superior ROI for your project. </p>
                        <p class="justify">Methodology   Our 360° client satisfaction methodology, incorporating feedback from managers, peers and customers, empowers all SNT3 Consulting team members to deliver the best client service possible. It provides both you and SNT3 Consulting with tools to provide real‐time feedback on how to further improve your client service experience. The entire SNT3 Consulting team is rewarded for excellence in client service and SNT3 Consulting's HR policies are aligned with the individual team member's client service competency rating.</p>
                        <h5 class="indent-bot">What’s included in SNT3 Consulting consultancy services?</h5>
                        <p class="justify">SNT3  Consulting  is  a  provider  of  enterprise  application  development  software  and  services  solutios.SNT3  Consulting  enables  competitive  advantage  by  reducing  development  costs,  accelerating  time to  market  and  enhancing IT expertise.  Leveraging a unique combination of on-site and offshore development; business domain knowledge and extensive technical expertise, the company offers a broad range of services and solutions including Software Engineering Services, Quality Assurance Services, and Technology Consultancy and resourcing.</p>
                        <p class="justify">SNT3  Consulting’s  technical  expertise  and  mature  software  development  lifecycle  are  optimized  for  rapid  application development resulting in fast turn‐around times. The team has experience in the latest technologies and understands the business and the operational reality of developing software products and services solutions that ensure customer success.</p>
                        <h5 class="indent-bot">What’s included in SNT3 Consulting delivery services?</h5>
                        <p class="justify">As a company we focus on building business by building relationships. We view ourselves as thought leaders, innovators, and problem solvers. We promote that our size and broad range of offerings allow us to delivery comprehensive solutions to our clients and we focus on similar principles of excellent customer service and stress trust and integrity as a key to our business.</p>
                        <!--<h5 class="indent-bot">Our Approach</h5>
                        <p class="justify">There are nine disciplines within our approach to deliver successful business outcomes.</p>
                        <p><img src="images/our_approach.png"/></p>
                        <p>For each step, we have identified the activities and deliverables that will be delivered as part of Phase 1. Highlights of our approach include the following:</p>
                        <ul class="list-1 spacing-bot">
                            <li><a href="#">Roadmap and high-level design for the current scope of work as well as subsequent phases will be developed during the Vision and Plan step of the project.</a></li>
                            <li><a href="#">Phase 1 design will include the design of business processes, customizations, rules, common interfaces, and conversions.</a></li>
                            <li><a href="#">The Design step overlaps the build step so that development of the conversion and modifications can begin when the design of objects is in the process of being coded, unit tested, and accepted. This will increase efficiencies in the development life cycle. Imperative in this process is joint review of functional specifications with the functional and technical teams.</a></li>
                            <li><a href="#">The Build steps also overlap the Deliver step. During the beginning of the Build step, after Design-critical items are completed, the functional team will configure the application. When the configurations are completed, the functional team will move into test planning to develop test cases, scenarios, and scripts. Each team will begin and end the project steps at different times, resulting in the overlap. It is critical that enough time is devoted to test planning so that when test execution begins, these documents are in place and ready to be executed.</a></li>
                        </ul>
                        <h5 class="indent-bot">Vision and Plan</h5>
                        <img class="clear indent-bot" src="images/vision_and_plan.png" />
                        <p class="justify">Consider in phase of the project methodology and approach discussed above, activities and deliverables can be expected out of each the project.
                            The objectives of the Vision and Plan step are to create a vision for the future-state planning processes and technology, as well as understand current state; define the project scope and approach, implementation and resource plans; and define detailed business and functional requirements.
                        </p>
                        <img class="clear indent-bot" src="images/key_activity_deliverables.png" />
                        <div class="fleft" style="width: 50%">
                            <ul class="list-1 spacing-bot">
                                <li><a href='#'>Develop project charter</a></li>
                                <li><a href='#'>Understand and evaluate the current state </a></li>
                                <li><a href='#'>Gather business requirements</a></li>
                                <li><a href='#'>Develop high-level future-state process flows</a></li>
                                <li><a href='#'>Perform current-state/future-state gap analysis</a></li>
                                <li><a href='#'>Determine areas of focus for design and build</a></li>
                                <li><a href='#'>Build roadmap</a></li>
                                <li><a href='#'>Establish project</a></li>
                                <li><a href='#'>Assess project scope, approach, and objectives</a></li>
                                <li><a href='#'>Define high-level requirements</a></li>
                                <li><a href='#'>Plan project</a></li>
                                <li><a href='#'>Confirm planning deliverables</a></li>
                                <li><a href='#'>Monitor and control project</a></li>
                                <li><a href='#'>Develop RICE (reports, interfaces, conversions, exchanges) strategy and plan</a></li>
                                <li><a href='#'>Support client’s technical architecture and PMO activities and deliverables in accordance with statement-of-work requirements</a></li>
                            </ul>
                        </div>
                        <div class="fleft" style="width: 50%">
                            <ul class="list-1 spacing-bot">
                                <li><a href='#'>Develop project charter</a></li>
                                <li><a href='#'>Understand and evaluate the current state </a></li>
                                <li><a href='#'>Gather business requirements</a></li>
                                <li><a href='#'>Develop high-level future-state process flows</a></li>
                                <li><a href='#'>Perform current-state/future-state gap analysis</a></li>
                                <li><a href='#'>Determine areas of focus for design and build</a></li>
                                <li><a href='#'>Build roadmap</a></li>
                                <li><a href='#'>Establish project</a></li>
                                <li><a href='#'>Assess project scope, approach, and objectives</a></li>
                                <li><a href='#'>Define high-level requirements</a></li>
                                <li><a href='#'>Plan project</a></li>
                                <li><a href='#'>Confirm planning deliverables</a></li>
                                <li><a href='#'>Monitor and control project</a></li>
                                <li><a href='#'>Develop RICE (reports, interfaces, conversions, exchanges) strategy and plan</a></li>
                                <li><a href='#'>Support <client> technical architecture and PMO activities and deliverables in accordance with statement-of-work requirements</a></li>
                                <li><a href='#'>Business requirements</a></li>
                                <li><a href='#'>Gap analysis</a></li>
                                <li><a href='#'>Weekly status report</a></li>
                                <li><a href='#'>Issue log</a></li>
                                <li><a href='#'>Change control log</a></li>
                                <li><a href='#'>Risk assessment</a></li>
                                <li><a href='#'>Testing strategy</a></li>
                                <li><a href='#'>Communication plan</a></li>
                                <li><a href='#'>Kickoff meeting</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <h5 class="indent-bot">Design</h5>
                        <img class="clear indent-bot" src="images/design_bar.png" />
                        <p class="justify">The objectives of the Design step are to define the future architecture, the information models, the governance framework and organization, the detailed planning and forecasting business process, the application design, and the technical infrastructure design. The business requirements and information standards that are defined during the Plan phase provide input to this work. The phase deliverables include artifacts developers use to build and configure applications and the supporting infrastructure. Business people use the artifacts to define business processes that complement the system functionality and to develop the learning plan and change management plan for the organization.</p>
                        <h5 class="indent-bot">Build</h5>
                        <img class="clear indent-bot" src="images/build_bar.png" />
                        <p class="justify">The objectives of the Build step are to leverage the design deliverables to efficiently build the solution based on client’s business requirements and processes, applicable business rules and logic, Web forms, reports, interface functionality, workflow and security plan. In addition, we will initiate preparations for system and user testing and deployment during this phase. Other objectives include developing the training materials for using the system and the new business processes and developing the cutover strategy for implementing the system, organization, and processes.</p>
                        <h5 class="indent-bot">Deliver</h5>
                        <img class="clear indent-bot" src="images/delivery_bar.png" />
                        <p class="justify">The objective of the Deliver step is to prepare for and execute system and business cutover to the new planning solution and processes. This involves final user acceptance testing (UAT), user training, and the formation or enhancement of a support organization to manage the environment after cutover. Upon successful cutover, the business is ready to operate on the new production system.</p>
                        <h5 class="indent-bot">Operate</h5>
                        <img class="clear indent-bot" src="images/operate_bar.png" />
                        <p class="justify">The objective of the Operate step is for the business and support organizations to manage, control, and operate processes and applications. Performance is evaluated continuously, and recommendations for improvement are documented. The project is evaluated against the vision and business value, and a postmortem is conducted to document lessons learned before the project is closed.</p>-->
                    </section>
                    <!--<section>
                        <h5 class="padding-top1 indent-bot">Project management</h5>
                        <img src="images/project_management.jpg" align="left" style="padding: 0 20px 10px 0" />
                        <p class="justify">Our project management methodology is a collection of our combined knowledge used in conjunction with our professional experience and judgment to serve our clients in achieving their project and business goals. We have developed an approach to project management specifically tailored toward integrating the various people, process, and technology issues found in large, complex projects.</p>
                        <p class="justify">Project management is an integral thread of our methodology. This thread has its own activities and deliverables that are interwoven with other threads and focused on our solutions. Completing those activities and deliverables will be a joint effort between our and client’s project management teams. In particular, during the mobilization phase of the project, our project management team will focus with client’s project management team on the following elements that are critical for successful project completion.</p>
                    </section>
                    <section>
                        <h5 class="padding-top1 indent-bot">Project planning and tracking</h5>
                        <img src="images/project_tracking.jpg" align="right" style="padding: 0 0 10px 20px" />
                        <p class="justify">This activity starts with the development of a robust, integrated work plan that includes activities, associated durations, milestones, and resource assignments. The integrated aspect is important, as the work plan captures activities of all threads and dependencies between them. During the mobilization portion of each project, our project management team will work with the team to fine-tune this work plan based on client’s specific needs. The master plan will serve as a guide in developing detailed milestone status-tracking scorecards for each of the project sub teams and offshore teams, so the overall project can be managed by key deliverables. Templates for all major deliverables for each step will be defined and documented in the project book and agreed upon prior to starting work.</p>
                        <p class="justify">Tracking of progress against the project plan will be done using milestones and progress on deliverables. The project management team will define and agree on the milestones and the associated completion credit assigned to them with the teams before each phase. These will be documented in the status-tracking scorecards. After work begins in each phase, the team leads will be expected to update their status-tracking scorecards on a weekly basis using the milestones as statuses for deliverables. The project management team will roll up the completion percentages into the master project plan. It will then compile the rolled-up status information into a weekly dashboard. The project management team will use the dashboard to gauge progress and to address activities within threads that may be falling behind or be at risk of falling behind schedule.</p>
                    </section>
                    <section>
                        <h5 class="padding-top1 indent-bot">Knowledge transfer</h5>
                        <img src="images/knowledge_transfer.jpg" align="left" style="padding: 0 20px 10px 0" />
                        <p class="justify">We know that knowledge transfer is critical to overall project success. Accordingly, we consider knowledge transfer in every aspect of project planning and execution — from how we design the project team, to how we commonage the project with you, through execution of all project activities.</p>
                        <p class="justify">Developed and refined over our more than 10 years of successful implementations, our knowledge transfer approach leverages an assortment of tools and learning accelerators. During the Vision and Plan phase, we will work closely with client to develop a learning path and medium best suited to address stakeholder needs and requirements.</p>
                        <p>Below are some high-level approaches/considerations:</p>
                        <ul class="list-1 spacing-bot">
                            <li><a href='#'>Core client project team members attend application training (by the vendor) so they can effectively participate in key design decisions.</a></li>
                            <li><a href='#'>During the Build phase, we will work side-by-side with client team-members, helping them utilize their newly learned application knowledge and reinforcing important application concepts.</a></li>
                            <li><a href='#'>In the deliver phase, there are several options for training impacted stakeholders and end users, including train the trainer, classroom, Web-based delivery, or a combination of thereof.</a></li>
                        </ul>
                    </section>
                    <section>
                        <h5 class="padding-top1 indent-bot">Change management and training</h5>
                        <img src="images/training.jpg" align="right" style="padding: 0 0 10px 20px" />
                        <p class="justify">SNT3 has an extensive library of training materials, which we will leverage and customize to meet the specific needs and objectives of client project team members and end users. Project training and materials will promote and enable sustainable change and support project objectives by educating end users on how to apply new business processes and solution technology to do their jobs. Our training materials will align to the core tenets of client and demonstrate the following core characteristics:</p>
                        <ul class="list-1 spacing-bot" style="width: 420px">
                            <li><a href='#'>Role based, recognizing that each participant will have unique training needs based on the nature of his or her work</a></li>
                            <li><a href='#'>Aligned with business strategy, highlighting the alignment of the new system/processes with the overall business strategy</a></li>
                            <li><a href='#'>Monitored and measured, ensuring that all individuals who require training receive the necessary support</a></li>
                        </ul>
                    </section>
                    <section>
                        <h5 class="padding-top1 indent-bot">Post-implementation support</h5>
                        <img src="images/implementation_support.jpg" align="left" style="padding: 0 20px 10px 0" />
                        <p class="justify">We will work with you to decide on the best approach for providing post-implementation support capabilities. Based on our experience, possible post-implementation support scenarios for client are as follows: </p>
                        <ul class="list-1 spacing-bot fright" style="width: 520px">
                            <li><a href='#'>We maintain several deployment project team members for a number of cycles post deployment to provide support services while the client team ramps up support capabilities.</a></li>
                            <li><a href='#'>Client develops during the project and provides implementation support upon system go-live. Project team provides remote support as needed.</a></li>
                            <li><a href='#'>Client can engage our Application Management Services organization to provide support for a contracted period of time post deployment. Such services can include incident/break-fix support, enhancements, maintenance, emergency releases, etc. In this option, we will work with you to tailor our services to effectively and efficiently meet your needs and requirements.</a></li>
                        </ul>
                    </section>-->
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->