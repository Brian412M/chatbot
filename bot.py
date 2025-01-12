
import random

responses = {
    "hi": ["Hello!", "Hi there!", "Hey!"],
    "how are you": ["I'm good, thank you.", "I'm feeling great!", "I'm doing well, how about you?"],
    "bye": ["Goodbye!", "See you later!", "Have a great day!"]
}

def chatbot():
    print("Hello, I am a Chatbot. How can I help you today?")
    while True:
        user_input = input()
        if user_input.lower() in responses:
            print(random.choice(responses[user_input.lower()]))
            if user_input.lower() == "bye":
                break
        else:
            print("I'm sorry, I don't understand what you're asking. Could you please rephrase it?")

chatbot()
