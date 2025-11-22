
document.addEventListener("DOMContentLoaded", function() {

    // --- getting HTML elements ---
    const chatToggleBtn = document.getElementById('chatToggle');
    const chatWindow = document.getElementById('chatWindow');
    const chatCloseBtn = document.getElementById('chatClose');
    const chatSendBtn = document.getElementById('chatSend');
    const chatInput = document.getElementById('chatInput');
    const chatBody = document.getElementById('chatBody');

   
    if (!chatToggleBtn) {
        return; // Stop if the chatbot isn't on this page
    }

    // ---  Add Event Listeners ---
    chatToggleBtn.addEventListener('click', () => {
        chatWindow.classList.toggle('active');
        chatToggleBtn.classList.toggle('active');
    });

    chatCloseBtn.addEventListener('click', () => {
        chatWindow.classList.remove('active');
        chatToggleBtn.classList.remove('active');
    });

    chatSendBtn.addEventListener('click', () => {
        handleUserMessage();
    });

    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            handleUserMessage();
        }
    });

    // --- Handle Sending a Message ---
    function handleUserMessage() {
        const userInput = chatInput.value.trim(); 
        if (userInput === "") return; 

        appendMessage(userInput, 'user');
        chatInput.value = ""; 

        showBotTyping();

        setTimeout(() => {
            const botResponse = getBotResponse(userInput);
            appendMessage(botResponse, 'bot');
        }, 500); 
    }

    // --- Display a message in the chat body ---
    function appendMessage(message, sender) {
        const typingIndicator = document.querySelector('.msg.typing');
        if (typingIndicator) {
            typingIndicator.remove();
        }

        const msgDiv = document.createElement('div');
        msgDiv.classList.add('msg', sender);
        msgDiv.textContent = message;
        chatBody.appendChild(msgDiv);
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    // --- Bot is typing animation ---
    function showBotTyping() {
        const msgDiv = document.createElement('div');
        msgDiv.classList.add('msg', 'bot', 'typing');
        msgDiv.innerHTML = `
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
        `;
        chatBody.appendChild(msgDiv);
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    // --- Chatbot prompt and responses (AI brain content) ---
    function getBotResponse(userInput) {
        let input = userInput.toLowerCase();

        // --- Company & Login ---
        if (input.includes("what is ramasia") || (input.includes("what") && input.includes("ramasia"))) {
            return "a Philippine-based employment agency that recruits and deploys Filipino workers overseas. It specializes in placing professionals like nurses and teachers in the Middle East, UK, and USA, as well as domestic helpers in countries like Saudi Arabia, Kuwait, and Malaysia.";
        }
        if (input.includes("how to login") || (input.includes("login") && input.includes("how"))) {
            return "To log in, simply click the \"Login/Register\" button located on the far right side of the main navigation bar at the top of the page. A pop-up window will then appear, showing the login form and also giving you an option to register.";
        }
        if (input.includes("can't log in") || input.includes("cannot log in") || input.includes("forgot password")) {
            return "Try resetting your password first. If the issue continues, clear your browser cache or switch to another device. I can also check if your account has any restrictions.";
        }

        // --- Job Questions ---
        if (input.includes("jobs available") || (input.includes("what") && input.includes("jobs")) || input.includes("job openings")) {
            return "We have several job openings available at the moment. You can browse all active positions through our Jobs Portal. If you tell me your preferred country or type of work.";
        }
        if (input.includes("how to apply") || (input.includes("apply for") && (input.includes("dubai") || input.includes("germany") || input.includes("qatar")))) {
            return "To apply, simply visit our online application portal and select your desired country. After choosing the job, fill out the application form and upload the required documents. If you need assistance, I can guide you step-by-step.";
        }
        if (input.includes("qualified")) {
            return "I can help check your qualifications. Please send your latest resume or share your work experience, education, and certifications, so I can compare them with the job requirements.";
        }

        // --- Application Process ---
        if (input.includes("upload") && input.includes("resume")) {
            return "You can upload your resume directly on the application page of the job you’re applying for. Look for the “Upload Resume” or “Attach File” button.";
        }
        if (input.includes("after i submit") || (input.includes("what happens") && input.includes("application"))) {
            return "Once submitted, our recruitment team will review your profile. If you meet the qualifications, you’ll receive a text or email for the next steps such as interviews, assessments, or document verification.";
        }
        if ((input.includes("how long") && input.includes("process")) || input.includes("hiring process")) {
            return "Processing time varies depending on the job and country. Typically, it takes 1–4 weeks for screening and interviews, and additional time for overseas requirements. We’ll keep you updated throughout the process.";
        }
        if (input.includes("interview schedule") || (input.includes("prepare") && input.includes("interview"))) {
            return "Bring a valid ID, updated resume, and any certificates related to your experience. Dress professionally and arrive at least 15 minutes early. If it’s an online interview, ensure a stable internet connection.";
        }
        if (input.includes("track") && (input.includes("status") || input.includes("application"))) {
            return "You can track your status through your applicant dashboard. Updates such as “Under Review,” “For Interview,” or “For Deployment” will appear there.";
        }

        // --- Documents & Costs ---
        if (input.includes("documents") && (input.includes("overseas") || input.includes("need"))) {
            return "Basic requirements include a valid passport, updated resume, certificates of training, COE, PSA documents, medical results, and your signed employment contract. Additional documents may vary depending on the country.";
        }
        if (input.includes("domestic helper") && input.includes("placement fee")) {
            return "According to POEA regulations, domestic helpers should not be charged a placement fee. All recruitment and processing fees must be shouldered by the employer.";
        }
        if (input.includes("placement fee")) {
            return "A placement fee is a charge by licensed agencies for certain overseas jobs. Not all countries allow it. I can check if your chosen position or destination requires one and how much the standard cost is.";
        }
        if (input.includes("total cost") || input.includes("estimated cost")) {
            return "Total cost depends on your job, country, and required processing steps. Expenses usually include medical exams, document processing, and visa fees.";
        }
        if (input.includes("medical exam")) {
            return "You’ll undergo a standard overseas medical exam, including physical check-ups, blood tests, X-rays, and other screenings. The clinic will send your results directly to the agency once complete.";
        }
        if (input.includes("visa processing") || input.includes("visa")) {
            return "Visa processing includes document submission, embassy evaluation, and sometimes an interview. Once approved, your passport will be stamped or issued with a visa sticker. Processing time varies by destination.";
        }

        // --- Admin/Staff Expense Questions ---
        if (input.includes("expense report") || (input.includes("submit") && input.includes("expense"))) {
            return "You can submit your expense report through the Accounting Portal. Click “Add Expense,” fill in the required details, attach your receipt, and submit for approval.";
        }
        
        if (input.includes("upload") && input.includes("receipt")) {
            return "On the expense submission page, click “Attach Receipt,” choose the file from your device, and upload it. Make sure it’s clear and readable.";
        }
        if (input.includes("payment timeline")) {
            return "Approved expenses are usually processed within 5–10 business days, depending on cutoff schedules and approval flow.";
        }
        
        // *** NEW/FIXED RULE ***
        // This catches the single word "expense" and guides the user.
        if (input.includes("expense")) {
             return "I have information on expenses. Are you asking how to 'submit an expense report', or about the 'payment timeline' for reimbursements?";
        }

        // --- Resources & Tips ---
        if (input.includes("resume template") || (input.includes("download") && input.includes("template"))) {
            return "Our Resource Library includes free resume templates in Word and PDF formats.";
        }
        if (input.includes("interview tips")) {
            return "Yes, we have a full guide with tips on answering common interview questions, body language, and preparation dos and don’ts. You can check it on our blog page.";
        }
        if (input.includes("salary") && (input.includes("saudi") || input.includes("expect"))) {
            return "Salary varies based on your job and experience.";
        }
        if (input.includes("training modules") || input.includes("learning materials")) {
            return "Training modules are in the Resource Library under “Training & Learning Materials.”";
        }

        // --- Account Management ---
        if (input.includes("update") && input.includes("profile")) {
            return "Go to your dashboard, click “My Profile,” and update your personal or contact details. Don’t forget to save your changes.";
        }
        // FIXED: Corrected typo 'input.mismatch' to 'input.includes'
        if (input.includes("not receiving email") || input.includes("notifications")) { 
            return "Please check your spam folder and make sure your email address is correct in your profile. If everything looks fine, I can verify if there’s a system issue.";
        }
        if (input.includes("verify") && input.includes("account")) {
            return "You will receive a verification email, a code or link. Follow the instructions to complete verification.";
        }
        
        // --- Greetings & Farewells ---
        if (input.includes("hello") || input.includes("hi")) {
            return "Hello! How can I help you today?";
        }
        if (input.includes("bye") || input.includes("thanks") || input.includes("thank you")) {
            return "You're welcome! Have a great day.";
        }

        // --- Fallback Response ---
        return "I'm sorry, I don't have the answer to that. You can ask me about our job openings, application process, or required documents.";
    }

});