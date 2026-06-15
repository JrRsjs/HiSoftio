<?php include 'header.php'; ?>

<style>
    .case-study-hero {
        background: linear-gradient(135deg, rgba(230, 255, 177, 0.1) 0%, rgba(59, 60, 57, 0.05) 100%);
    }
    
    .case-study-section {
        margin-bottom: 60px;
    }
    
    .case-study-highlight {
        background-color: rgba(230, 255, 177, 0.1);
        border-left: 4px solid #E6FFB1;
        padding: 20px;
        border-radius: 8px;
        margin: 20px 0;
    }
    
    .case-study-highlight.dark {
        background-color: rgba(59, 60, 57, 0.3);
        border-left-color: #E6FFB1;
    }
    
    .results-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }
    
    .result-card {
        background: #f5f5f5;
        padding: 25px;
        border-radius: 10px;
        border: 1px solid #e0e0e0;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .result-card:is(.dark *) {
        background: #1a1a1a;
        border-color: #333;
    }
    
    .result-number {
        font-size: 32px;
        font-weight: bold;
        color: #E6FFB1;
        margin-bottom: 10px;
    }
    
    .result-label {
        font-size: 14px;
        color: #333;
        font-weight: 500;
    }
    
    .result-card:is(.dark *) .result-label {
        color: #aaa;
    }
</style>

<section class="hero case-study-hero overflow-hidden relative max-lg:pt-150 pt-[240px] pb-[60px]">
    <div class="container">
        <div class="max-w-[948px] mx-auto text-center" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
            <p class="mb-4 font-medium uppercase">Case Study</p>
            <h2 class="max-lg:mb-10 mb-10">Predictive Lead Scoring for a SaaS Application</h2>
        </div>
    </div>
</section>

<section class="relative pb-150 max-md:pb-25">
    <div class="container">
        <div class="max-w-[850px] mx-auto">
            
            <!-- Client Challenge -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Client Challenge</h3>
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p>A SaaS marketing firm struggled with low conversion rates due to an unstructured lead qualification process. Their sales team was spending time on unqualified leads, reducing efficiency and ROI.</p>
                    </div>
                </div>
            </div>

            <!-- HiSoftio's Solution -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">HiSoftio's Solution</h3>
                <p class="mb-6">Our data team built an AI-powered predictive lead scoring system using behavioral data (email opens, click-throughs, and demo requests) and demographic attributes. The model ranked leads based on conversion likelihood, integrating directly into their CRM (HubSpot).</p>
            </div>

            <!-- Technology Stack -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Technology Stack</h3>
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p>Python (Scikit-learn), Power BI, HubSpot API, PostgreSQL</p>
                    </div>
                </div>
            </div>

            <!-- Results -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Results</h3>
                <!-- Updated result cards with dark background for better text visibility -->
                <div class="results-grid">
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">43%</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">Improvement in Sales Conversion Rate</div>
                    </div>
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">32%</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">Reduction in Average Lead Response Time</div>
                    </div>
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">20+</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">Hours/Week Saved for Sales Team</div>
                    </div>
                </div>
            </div>

            <!-- Key Takeaway -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Key Takeaway</h3>
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p>AI-based lead scoring transformed manual processes into a data-driven system that improved focus and conversions.</p>
                    </div>
                </div>
            </div>

            <!-- Client Website -->
            <div class="case-study-section">
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p class="mb-2"><strong>Client Website:</strong></p>
                        <a href="https://twigs.cc/" target="_blank" rel="noopener noreferrer" class="text-primary-500 hover:underline">https://twigs.cc/</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
