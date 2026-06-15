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
            <h2 class="max-lg:mb-10 mb-10">Marketing Spend Optimization for a Marketplace Brand</h2>
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
                        <p>A marketplace client managing ads across Google, Meta, and TikTok lacked real-time insight into ROI. Budget allocation was static, leading to wasted spend on underperforming campaigns.</p>
                    </div>
                </div>
            </div>

            <!-- HiSoftio's Solution -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">HiSoftio's Solution</h3>
                <p class="mb-6">HiSoftio implemented an ML-driven budget optimization engine that analyzed campaign data daily and automatically redistributed spend to top-performing ads based on ROAS (Return on Ad Spend) and CTR metrics.</p>
            </div>

            <!-- Technology Stack -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Technology Stack</h3>
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p>TensorFlow, Google Ads API, Meta Marketing API, AWS Lambda</p>
                    </div>
                </div>
            </div>

            <!-- Results -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Results</h3>
                <div class="results-grid">
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">28%</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">Increase in Total Ad ROI</div>
                    </div>
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">40%</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">Faster Campaign Optimization Cycle</div>
                    </div>
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">$12K</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">/Month Cost Savings in Ad Spend</div>
                    </div>
                </div>
            </div>

            <!-- Key Takeaway -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Key Takeaway</h3>
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p>AI-driven marketing automation delivered smarter, data-led ad spend distribution across platforms.</p>
                    </div>
                </div>
            </div>

            <!-- Client Websites -->
            <div class="case-study-section">
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p class="mb-3"><strong>Client Websites:</strong></p>
                        <a href="https://sellhalalgoods.com/" target="_blank" rel="noopener noreferrer" class="text-primary-500 hover:underline block mb-2">https://sellhalalgoods.com/</a>
                        <a href="https://www.buyhalalgoods.com/" target="_blank" rel="noopener noreferrer" class="text-primary-500 hover:underline">https://www.buyhalalgoods.com/</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
