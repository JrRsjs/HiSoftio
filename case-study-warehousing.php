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
            <h2 class="max-lg:mb-10 mb-10">Revenue Forecasting & Sales Prediction for a Warehousing Chain</h2>
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
                        <p>A UK based warehousing chain struggled to accurately forecast revenue due to fluctuating seasonal sales and external market factors, impacting inventory and staffing decisions.</p>
                    </div>
                </div>
            </div>

            <!-- HiSoftio's Solution -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">HiSoftio's Solution</h3>
                <p class="mb-6">We developed a revenue forecasting model using time series analysis and regression algorithms. The system integrated live POS data and historical sales to predict weekly and monthly revenues.</p>
            </div>

            <!-- Technology Stack -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Technology Stack</h3>
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p>Python (Prophet, XGBoost), Tableau, Azure Data Lake</p>
                    </div>
                </div>
            </div>

            <!-- Results -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Results</h3>
                <div class="results-grid">
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">91%</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">Forecast Accuracy Achieved</div>
                    </div>
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">22%</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">Reduction in Stockouts During Peak Seasons</div>
                    </div>
                    <div class="result-card bg-gray-100 dark:bg-dark-200">
                        <div class="result-number">Enhanced</div>
                        <div class="result-label text-gray-800 dark:text-gray-300">Decision-Making for Supply and Marketing Teams</div>
                    </div>
                </div>
            </div>

            <!-- Key Takeaway -->
            <div class="case-study-section">
                <h3 class="mb-6 text-2xl font-semibold">Key Takeaway</h3>
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p>Predictive analytics empowered the client with accurate, data-driven revenue planning and resource management.</p>
                    </div>
                </div>
            </div>

            <!-- Client Website -->
            <div class="case-study-section">
                <div class="bg-white dark:bg-dark-200 shadow-box rounded-medium p-2.5">
                    <div class="border border-dashed rounded border-gray-100 dark:border-borderColour-dark p-10 max-lg:p-5">
                        <p class="mb-2"><strong>Client Website:</strong></p>
                        <a href="https://www.lcb.co.uk/" target="_blank" rel="noopener noreferrer" class="text-primary-500 hover:underline">https://www.lcb.co.uk/</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
