<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusHub Coffee - Artisan Coffee Experience in Downtown</title>
    <meta name="description" content="NexusHub Coffee offers freshly roasted beans, handcrafted beverages, and cozy atmosphere. Visit our downtown location for authentic coffee culture. Click here to continue exploring our story and community-focused approach to exceptional coffee brewing.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c1810;
            background-color: #f8f5f1;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #8b4513, #a0522d);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m3p8 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q5w2 {
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
        }

        .nav-menu-r8t4 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b6y1 {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link-b6y1:hover {
            color: #f4e4bc;
        }

        .hero-section-z9n3 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content-l4s7 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-k8m5 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-p2x9 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-v7h3 {
            background: #d2691e;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-v7h3:hover {
            background: #b8860b;
            transform: translateY(-2px);
        }

        .section-wrapper-j6k8 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section-n4r7 {
            background: #fff;
            border-radius: 15px;
            padding: 3rem;
            margin: 3rem 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .section-title-w8q2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
            color: #8b4513;
        }

        .content-grid-f3t6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .content-card-u9i5 {
            background: #f9f6f2;
            padding: 2rem;
            border-radius: 10px;
            border-left: 5px solid #d2691e;
        }

        .card-title-e7r4 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #8b4513;
        }

        .history-timeline-a5d8 {
            background: linear-gradient(45deg, #f4e4bc, #deb887);
            padding: 3rem;
            margin: 3rem 0;
            border-radius: 20px;
        }

        .timeline-item-c2x7 {
            display: flex;
            margin: 2rem 0;
            align-items: center;
        }

        .timeline-year-h9k3 {
            background: #8b4513;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            margin-right: 2rem;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
        }

        .timeline-content-m6p1 {
            flex: 1;
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .brewing-methods-s4t9 {
            background: url('https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg') center/cover;
            background-attachment: fixed;
            padding: 4rem 0;
            position: relative;
        }

        .brewing-overlay-x1y8 {
            background: rgba(139, 69, 19, 0.85);
            padding: 3rem;
            color: white;
            border-radius: 15px;
            margin: 0 2rem;
        }

        .method-grid-q7w4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .method-card-l8n6 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .community-section-g3v5 {
            background: #2f1b14;
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .community-grid-i9o2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 2rem auto;
        }

        .community-card-d5f7 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            border: 2px solid #d2691e;
        }

        .reviews-section-b8h4 {
            background: #f0e6d2;
            padding: 4rem 2rem;
        }

        .review-container-k2m9 {
            max-width: 1000px;
            margin: 0 auto;
        }

        .review-card-p6t3 {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .review-stars-y4u7 {
            color: #ffd700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .reviewer-info-z7x1 {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .reviewer-avatar-n3q8 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 1rem;
            background: #d2691e;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .sustainability-section-r5e9 {
            background: linear-gradient(135deg, #228b22, #32cd32);
            color: white;
            padding: 4rem 2rem;
        }

        .sustainability-content-w1a6 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .sustainability-card-j8k5 {
            background: rgba(255,255,255,0.15);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(5px);
        }

        .events-section-c4v2 {
            background: #fff;
            padding: 4rem 2rem;
        }

        .events-wrapper-m7n4 {
            max-width: 1200px;
            margin: 0 auto;
        }

        .event-card-t9p6 {
            background: linear-gradient(45deg, #f4e4bc, #deb887);
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 15px;
            border-left: 8px solid #8b4513;
        }

        .footer-section-x5z8 {
            background: #2c1810;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content-h6j3 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-column-q1w7 {
            padding: 1rem;
        }

        .footer-title-s8d4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #d2691e;
        }

        .contact-link-f2g9 {
            color: #f4e4bc;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
        }

        .contact-link-f2g9:hover {
            color: #d2691e;
        }

        .modal-overlay-l3k7 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-p9r5 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-v4t2 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #8b4513;
        }

        .continue-link-a8b3 {
            background: #d2691e;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .continue-link-a8b3:hover {
            background: #b8860b;
            transform: scale(1.05);
        }

        .image-gallery-u6i9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .gallery-image-o7p4 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .nav-menu-r8t4 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-k8m5 {
                font-size: 2.5rem;
            }
            
            .timeline-item-c2x7 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-h9k3 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m3p8">
            <a href="#home" class="logo-brand-q5w2">NexusHub Coffee</a>
            <ul class="nav-menu-r8t4">
                <li><a href="#about" class="nav-link-b6y1">About Us</a></li>
                <li><a href="#history" class="nav-link-b6y1">Our Story</a></li>
                <li><a href="#brewing" class="nav-link-b6y1">Brewing Methods</a></li>
                <li><a href="#community" class="nav-link-b6y1">Community</a></li>
                <li><a href="#sustainability" class="nav-link-b6y1">Sustainability</a></li>
                <li><a href="#events" class="nav-link-b6y1">Events</a></li>
                <li><a href="#reviews" class="nav-link-b6y1">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-z9n3">
        <div class="hero-content-l4s7">
            <h1 class="hero-title-k8m5">Welcome to NexusHub Coffee</h1>
            <p class="hero-subtitle-p2x9">Where every cup tells a story and every sip connects communities through authentic coffee culture</p>
            <a href="#about" class="cta-button-v7h3">Discover Our Journey</a>
        </div>
    </section>

    <section id="about" class="section-wrapper-j6k8">
        <div class="about-section-n4r7">
            <h2 class="section-title-w8q2">About NexusHub Coffee</h2>
            <p style="font-size: 1.1rem; text-align: center; margin-bottom: 2rem;">
                Founded in the heart of downtown, NexusHub Coffee represents more than just a coffee shop - we're a gathering place where passionate coffee enthusiasts, local artists, and community members come together to share experiences and create lasting connections.
            </p>
            
            <div class="content-grid-f3t6">
                <div class="content-card-u9i5">
                    <h3 class="card-title-e7r4">Artisan Roasting</h3>
                    <p>Our master roasters carefully select beans from sustainable farms worldwide, creating unique blends that capture the essence of each origin. Every batch is roasted in small quantities to ensure maximum freshness and flavor complexity.</p>
                    <a href="#brewing" class="continue-link-a8b3">Click here to continue learning about our methods</a>
                </div>
                
                <div class="content-card-u9i5">
                    <h3 class="card-title-e7r4">Community Focus</h3>
                    <p>We believe coffee brings people together. Our space hosts local art exhibitions, poetry readings, and community meetings, fostering connections that extend far beyond our walls into the broader neighborhood fabric.</p>
                </div>
                
                <div class="content-card-u9i5">
                    <h3 class="card-title-e7r4">Sustainable Practices</h3>
                    <p>Environmental responsibility guides every decision we make. From compostable cups to energy-efficient equipment, we're committed to reducing our footprint while supporting fair trade practices globally.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-a5d8">
        <div class="section-wrapper-j6k8">
            <h2 class="section-title-w8q2" style="color: #2c1810;">Our Journey Through Time</h2>
            
            <div class="timeline-item-c2x7">
                <div class="timeline-year-h9k3">2018</div>
                <div class="timeline-content-m6p1">
                    <h3>The Beginning</h3>
                    <p>Sarah Martinez and David Chen, two coffee enthusiasts who met at a cupping session, decided to open a small coffee roastery in a converted warehouse. Their vision was simple: create exceptional coffee while building genuine community connections.</p>
                </div>
            </div>
            
            <div class="timeline-item-c2x7">
                <div class="timeline-year-h9k3">2019</div>
                <div class="timeline-content-m6p1">
                    <h3>First Expansion</h3>
                    <p>Due to overwhelming community support, we expanded our space to include a full café area. Local carpenter Miguel Rodriguez crafted our signature reclaimed wood tables, each piece telling its own story of sustainability and craftsmanship.</p>
                </div>
            </div>
            
            <div class="timeline-item-c2x7">
                <div class="timeline-year-h9k3">2020</div>
                <div class="timeline-content-m6p1">
                    <h3>Community Resilience</h3>
                    <p>During challenging times, we pivoted to support our community through contactless delivery, virtual coffee tastings, and partnering with local food banks to provide meals for families in need.</p>
                    <a href="#community" class="continue-link-a8b3">Click here to continue reading about our community work</a>
                </div>
            </div>
            
            <div class="timeline-item-c2x7">
                <div class="timeline-year-h9k3">2022</div>
                <div class="timeline-content-m6p1">
                    <h3>Recognition & Growth</h3>
                    <p>Our commitment to quality earned recognition from the Specialty Coffee Association. We launched our coffee education program, teaching brewing techniques to home enthusiasts and aspiring baristas alike.</p>
                </div>
            </div>
            
            <div class="timeline-item-c2x7">
                <div class="timeline-year-h9k3">2024</div>
                <div class="timeline-content-m6p1">
                    <h3>Innovation Continues</h3>
                    <p>Today, we continue pushing boundaries with experimental processing methods, direct trade relationships, and innovative brewing equipment while maintaining our core values of community, quality, and sustainability.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="brewing" class="brewing-methods-s4t9">
        <div class="brewing-overlay-x1y8">
            <div class="section-wrapper-j6k8">
                <h2 class="section-title-w8q2" style="color: white;">Brewing Excellence</h2>
                <p style="text-align: center; font-size: 1.1rem; margin-bottom: 2rem;">
                    Our approach to coffee brewing combines traditional techniques with modern innovation, ensuring every cup meets our exacting standards for flavor, aroma, and consistency.
                </p>
                
                <div class="method-grid-q7w4">
                    <div class="method-card-l8n6">
                        <h3>Pour Over Precision</h3>
                        <p>Using Hario V60 and Chemex brewers, our trained baristas control every variable - water temperature, grind size, and pouring technique - to extract the perfect flavor profile from each origin.</p>
                    </div>
                    
                    <div class="method-card-l8n6">
                        <h3>Espresso Mastery</h3>
                        <p>Our La Marzocco espresso machine, calibrated daily, produces shots with ideal extraction times and crema consistency. Each barista undergoes extensive training to maintain our quality standards.</p>
                    </div>
                    
                    <div class="method-card-l8n6">
                        <h3>Cold Brew Innovation</h3>
                        <p>Our 18-hour cold extraction process creates smooth, naturally sweet concentrate. We experiment with different grind sizes and steeping times to develop unique seasonal offerings.</p>
                    </div>
                    
                    <div class="method-card-l8n6">
                        <h3>French Press Tradition</h3>
                        <p>For those who appreciate full-bodied coffee, our French press method allows complete immersion brewing, resulting in rich, aromatic cups that showcase the coffee's natural oils and flavors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="community" class="community-section-g3v5">
        <div class="section-wrapper-j6k8">
            <h2 class="section-title-w8q2" style="color: white;">Community Connection</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                NexusHub Coffee serves as more than a café - we're a cultural hub where creativity flourishes and relationships grow stronger with every shared conversation.
            </p>
            
            <div class="community-grid-i9o2">
                <div class="community-card-d5f7">
                    <h3>Local Artist Showcase</h3>
                    <p>Every month, we feature works from emerging local artists, providing them with exposure while creating an ever-changing gallery atmosphere for our guests to enjoy.</p>
                </div>
                
                <div class="community-card-d5f7">
                    <h3>Coffee Education Workshops</h3>
                    <p>Weekly sessions teach brewing fundamentals, cupping techniques, and coffee origin stories. Participants leave with knowledge and confidence to enhance their home brewing experience.</p>
                </div>
                
                <div class="community-card-d5f7">
                    <h3>Book Club Gatherings</h3>
                    <p>Literary enthusiasts meet bi-weekly to discuss contemporary fiction, classic literature, and local authors' works while enjoying carefully paired coffee selections.</p>
                </div>
                
                <div class="community-card-d5f7">
                    <h3>Neighborhood Partnerships</h3>
                    <p>We collaborate with local businesses, schools, and nonprofits to support community initiatives, from fundraising events to educational programs that benefit everyone.</p>
                    <a href="#events" class="continue-link-a8b3">Click here to continue exploring our events</a>
                </div>
            </div>
        </div>
    </section>

    <section id="sustainability" class="sustainability-section-r5e9">
        <div class="sustainability-content-w1a6">
            <div class="sustainability-card-j8k5">
                <h3>Ethical Sourcing</h3>
                <p>We maintain direct relationships with coffee farmers, ensuring fair compensation and supporting sustainable farming practices that protect both livelihoods and ecosystems.</p>
            </div>
            
            <div class="sustainability-card-j8k5">
                <h3>Waste Reduction</h3>
                <p>Our comprehensive recycling program includes composting coffee grounds, using biodegradable packaging, and encouraging customers to bring reusable cups with incentive programs.</p>
            </div>
            
            <div class="sustainability-card-j8k5">
                <h3>Energy Efficiency</h3>
                <p>Solar panels power 60% of our operations, while energy-efficient roasting equipment and LED lighting reduce our carbon footprint significantly compared to traditional coffee shops.</p>
            </div>
            
            <div class="sustainability-card-j8k5">
                <h3>Community Gardens</h3>
                <p>We sponsor three local community gardens, providing coffee ground compost and supporting urban agriculture initiatives that strengthen food security in our neighborhood.</p>
            </div>
        </div>
    </section>

    <section id="events" class="events-section-c4v2">
        <div class="events-wrapper-m7n4">
            <h2 class="section-title-w8q2">Upcoming Events & Activities</h2>
            
            <div class="event-card-t9p6">
                <h3>Saturday Morning Cupping Sessions</h3>
                <p><strong>Every Saturday, 10:00 AM</strong></p>
                <p>Join our head roaster for guided coffee tastings where you'll learn to identify flavor notes, understand processing methods, and appreciate the nuances that make each coffee unique. Perfect for beginners and experienced coffee lovers alike.</p>
            </div>
            
            <div class="event-card-t9p6">
                <h3>Poetry & Prose Evening</h3>
                <p><strong>First Friday of each month, 7:00 PM</strong></p>
                <p>Local writers share original works in an intimate setting. Open mic opportunities available for those inspired to share their creativity with our supportive community audience.</p>
            </div>
            
            <div class="event-card-t9p6">
                <h3>Latte Art Workshops</h3>
                <p><strong>Third Sunday monthly, 2:00 PM</strong></p>
                <p>Learn the fundamentals of milk steaming and pouring techniques from our expert baristas. Participants practice creating hearts, rosettas, and tulips while understanding the science behind perfect microfoam.</p>
            </div>
            
            <div class="event-card-t9p6">
                <h3>Sustainability Forum</h3>
                <p><strong>Quarterly, dates vary</strong></p>
                <p>Community discussions about environmental responsibility, featuring guest speakers from local environmental organizations and opportunities to participate in neighborhood sustainability initiatives.</p>
                <a href="#reviews" class="continue-link-a8b3">Click here to continue reading customer experiences</a>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-b8h4">
        <div class="review-container-k2m9">
            <h2 class="section-title-w8q2">What Our Community Says</h2>
            
            <div class="review-card-p6t3">
                <div class="review-stars-y4u7">★★★★★</div>
                <p>"The atmosphere at NexusHub is absolutely incredible. I've been coming here for two years, and it feels like a second home. The baristas remember my order, and I've made genuine friendships through their community events. The coffee quality is consistently outstanding."</p>
                <div class="reviewer-info-z7x1">
                    <div class="reviewer-avatar-n3q8">JM</div>
                    <div>
                        <strong>Jessica Martinez</strong><br>
                        <small>Regular Customer since 2022</small>
                    </div>
                </div>
            </div>
            
            <div class="review-card-p6t3">
                <div class="review-stars-y4u7">★★★★★</div>
                <p>"As someone who works remotely, finding a coffee shop with reliable WiFi, comfortable seating, and exceptional coffee was challenging until I discovered NexusHub. The environment is perfect for productivity, and the staff is incredibly welcoming."</p>
                <div class="reviewer-info-z7x1">
                    <div class="reviewer-avatar-n3q8">AT</div>
                    <div>
                        <strong>Alex Thompson</strong><br>
                        <small>Freelance Designer</small>
                    </div>
                </div>
            </div>
            
            <div class="review-card-p6t3">
                <div class="review-stars-y4u7">★★★★★</div>
                <p>"The cupping sessions opened my eyes to coffee appreciation in ways I never imagined. The education program here is top-notch, and the passion of the staff is contagious. I've learned so much about brewing techniques and coffee origins."</p>
                <div class="reviewer-info-z7x1">
                    <div class="reviewer-avatar-n3q8">RK</div>
                    <div>
                        <strong>Robert Kim</strong><br>
                        <small>Coffee Enthusiast</small>
                    </div>
                </div>
            </div>
            
            <div class="review-card-p6t3">
                <div class="review-stars-y4u7">★★★★★</div>
                <p>"NexusHub supported our neighborhood food drive by providing space for collection and volunteer coordination. Their commitment to community goes far beyond serving great coffee - they genuinely care about making a positive impact."</p>
                <div class="reviewer-info-z7x1">
                    <div class="reviewer-avatar-n3q8">LW</div>
                    <div>
                        <strong>Linda Washington</strong><br>
                        <small>Community Organizer</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="image-gallery-u6i9" style="max-width: 1200px; margin: 3rem auto; padding: 0 2rem;">
        <img src="https://images.pexels.com/photos/324028/pexels-photo-324028.jpeg" alt="Coffee beans roasting" class="gallery-image-o7p4">
        <img src="https://images.pexels.com/photos/851555/pexels-photo-851555.jpeg" alt="Barista preparing coffee" class="gallery-image-o7p4">
        <img src="https://images.pexels.com/photos/1251175/pexels-photo-1251175.jpeg" alt="Coffee shop interior" class="gallery-image-o7p4">
        <img src="https://images.pexels.com/photos/2074130/pexels-photo-2074130.jpeg" alt="Latte art" class="gallery-image" class="gallery-image-o7p4">
        <img src="https://images.pexels.com/photos/1549200/pexels-photo-1549200.jpeg" alt="Coffee equipment" class="gallery-image-o7p4">
        <img src="https://images.pexels.com/photos/2396220/pexels-photo-2396220.jpeg" alt="Coffee cupping session" class="gallery-image-o7p4">
    </div>

    <footer class="footer-section-x5z8">
        <div class="footer-content-h6j3">
            <div class="footer-column-q1w7">
                <h3 class="footer-title-s8d4">Contact Information</h3>
                <a href="tel:+15551234567" class="contact-link-f2g9">📞 (555) 123-4567</a>
                <a href="mailto:hello@nexusxhub.com" class="contact-link-f2g9">✉️ hello@nexusxhub.com</a>
                <p class="contact-link-f2g9">📍 428 Oak Street, Downtown District</p>
                <p class="contact-link-f2g9">🕒 Mon-Fri: 6:30 AM - 8:00 PM</p>
                <p class="contact-link-f2g9">🕒 Sat-Sun: 7:00 AM - 9:00 PM</p>
            </div>
            
            <div class="footer-column-q1w7">
                <h3 class="footer-title-s8d4">Quick Links</h3>
                <a href="#about" class="contact-link-f2g9">About Our Story</a>
                <a href="#brewing" class="contact-link-f2g9">Brewing Methods</a>
                <a href="#events" class="contact-link-f2g9">Upcoming Events</a>
                <a href="#community" class="contact-link-f2g9">Community Programs</a>
                <a href="javascript:void(0)" onclick="openModal('privacy')" class="contact-link-f2g9">Privacy Policy</a>
                <a href="javascript:void(0)" onclick="openModal('terms')" class="contact-link-f2g9">Terms of Service</a>
            </div>
            
            <div class="footer-column-q1w7">
                <h3 class="footer-title-s8d4">Connect With Us</h3>
                <p class="contact-link-f2g9">Follow our journey on social media for daily updates, behind-the-scenes content, and community highlights.</p>
                <p class="contact-link-f2g9">📧 Newsletter: Weekly coffee tips and event announcements</p>
                <p class="contact-link-f2g9">🎯 Workshop Registration: Call or visit in person</p>
            </div>
            
            <div class="footer-column-q1w7">
                <h3 class="footer-title-s8d4">Our Mission</h3>
                <p class="contact-link-f2g9">Creating exceptional coffee experiences while fostering genuine community connections through sustainable practices and educational opportunities.</p>
                <p class="contact-link-f2g9" style="margin-top: 1rem; font-style: italic;">"Every cup tells a story, every visit builds community."</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #444;">
            <p>© 2024 NexusHub Coffee. All rights reserved. Crafted with passion in the heart of downtown.</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-l3k7">
        <div class="modal-content-p9r5">
            <span class="modal-close-v4t2" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last Updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>NexusHub Coffee collects information you provide directly to us, such as when you sign up for our newsletter, participate in workshops, or contact us for information. This may include your name, email address, phone number, and preferences for coffee education programs.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, communicate with you about events and workshops, send newsletters with coffee education content, and respond to your inquiries and requests.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted partners who assist us in operating our business, conducting workshops, or serving our customers.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time by following the unsubscribe instructions in our emails.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at hello@nexusxhub.com or call (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-l3k7">
        <div class="modal-content-p9r5">
            <span class="modal-close-v4t2" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last Updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By visiting NexusHub Coffee or using our services, you agree to be bound by these Terms of Service and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using our services.</p>
            
            <h3>Use of Services</h3>
            <p>Our services are intended for personal, non-commercial use. You may not use our facilities for illegal activities or in ways that could damage our property or disrupt other customers' experiences.</p>
            
            <h3>Workshop and Event Policies</h3>
            <p>Registration for workshops and events may require advance payment. Cancellations must be made at least 24 hours in advance for a full refund. We reserve the right to cancel events due to insufficient enrollment or unforeseen circumstances.</p>
            
            <h3>Intellectual Property</h3>
            <p>All content on our website, including text, graphics, logos, and images, is the property of NexusHub Coffee and is protected by copyright laws. You may not reproduce or distribute our content without written permission.</p>
            
            <h3>Limitation of Liability</h3>
            <p>NexusHub Coffee shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of our services or participation in our events.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Changes will be posted on our website and will take effect immediately upon posting.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these Terms of Service, please contact us at hello@nexusxhub.com or visit us at 428 Oak Street.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacy-modal');
            const termsModal = document.getElementById('terms-modal');
            
            if (event.target === privacyModal) {
                closeModal('privacy');
            }
            if (event.target === termsModal) {
                closeModal('terms');
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-x7k9');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, rgba(139, 69, 19, 0.95), rgba(160, 82, 45, 0.95))';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #8b4513, #a0522d)';
                nav.style.backdropFilter = 'none';
            }
        });

        // Add loading animation for images
        document.querySelectorAll('.gallery-image-o7p4').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '0';
                this.style.transition = 'opacity 0.5s ease';
                setTimeout(() => {
                    this.style.opacity = '1';
                }, 100);
            });
        });

        // Add hover effects to cards
        document.querySelectorAll('.content-card-u9i5, .method-card-l8n6, .community-card-d5f7').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.transition = 'transform 0.3s ease';
                this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 3px 10px rgba(0,0,0,0.1)';
            });
        });

        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.content-card-u9i5, .timeline-item-c2x7, .review-card-p6t3').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Add click tracking for continue buttons
        document.querySelectorAll('.continue-link-a8b3').forEach(button => {
            button.addEventListener('click', function(e) {
                // Add analytics tracking here if needed
                console.log('Continue button clicked:', this.textContent);
            });
        });

        // Add form validation if contact forms are added later
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add mobile menu toggle functionality
        function toggleMobileMenu() {
            const menu = document.querySelector('.nav-menu-r8t4');
            menu.classList.toggle('mobile-active');
        }

        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal('privacy');
                closeModal('terms');
            }
        });

        // Add performance monitoring
        window.addEventListener('load', function() {
            const loadTime = performance.now();
            console.log('Page loaded in:', Math.round(loadTime), 'ms');
        });

        // Add error handling for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                this.style.display = 'none';
                console.log('Image failed to load:', this.src);
            });
        });

        // Add scroll-to-top functionality
        let scrollToTopButton = document.createElement('button');
        scrollToTopButton.innerHTML = '↑';
        scrollToTopButton.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #d2691e;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            cursor: pointer;
            display: none;
            z-index: 1000;
            transition: all 0.3s ease;
        `;
        
        scrollToTopButton.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        document.body.appendChild(scrollToTopButton);
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                scrollToTopButton.style.display = 'block';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>


