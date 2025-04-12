<div id="chatbot-launcher">
    <img src={{asset("assets/images/bot2.png")}} alt="Chat" id="chatbot-icon" onclick="toggleChat()">
    <span id="chatbot-label"> ask AI</span>
</div>

<div id="chatbot-container" class="hidden">
    <div id="chatbot-header">
        <h6 style="color: white">Chat with EduFusionX AI</h6>
        <button id="chatbot-close" onclick="toggleChat()">&times;</button>
    </div>
    <div id="chatbot-messages">
        <div id="response">
            <!-- Chat messages will be dynamically added here -->
        </div>
    </div>

    <div id="chatbot-input">
        <input type="text" id="text" name="text" placeholder="Type a message...">
        <button onclick="generateResponse();" id="chatbot-send">Send</button>
    </div>
</div>
