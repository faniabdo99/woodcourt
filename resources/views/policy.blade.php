@include('layout.header', [
'PageTitle' => 'Payment Methods',
'Description' => 'The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwoods.',
'ogType' => 'Website'
])
<body>
    @include('layout.navbar')
    <section>
        <div class="container">
            <h1 class="brand text-center mt-5">Privacy Policy</h1>
            <ul class="list-group mb-5 mt-3">
                <li class="list-group-item"><b>Identity Data</b>includes your full name, date of birth, gender, social security numbers, and
                    other data on government-issued identification documents.</li>
                <li class="list-group-item"><b>Contact Data</b> includes your email address, mailing address, and telephone numbers.</li>
                <li class="list-group-item"><b>Financial Data</b> includes your bank account and payment card details, suitability information,and information about your income, account balances, financial transaction history, credit history, tax information, and credit scores.</li>
                <li class="list-group-item"><b>Profile Data</b> includes your username and password, purchases or orders made by you, your
                    knowledge assessment results, and your interests, preferences, feedback, and survey responses.</li>
                <li class="list-group-item"><b>Usage Information </b> includes information about how you access and use our Services, such as
                    your actions on the Services, including your interactions with others on the Services, photos or media you upload to the Services, your username, and other content you provide ("Usage Information"). We only access your device camera roll and camera with your permission. If you need to update your permissions, you can do so in your device's settings. Please remember that Robinhood may, but has no obligation to, monitor, record, and store Usage Information in order to protect your safety or the safety of other users, to assist with regulatory or law enforcement efforts, to protect and defend our rights and property, or for other reasons relating to our provision of the Services. By using the Services, you consent to the recording, storage, and disclosure of such information you send or receive for these purposes. </li>
                <li class="list-group-item"><b>Contact List</b>Information with your permission, we may access your contact list on your
                    mobile device or in your email accounts so that you can identify your contacts on the Services and direct the invitation of your contacts. We store and use this information to suggest referrals or connections and for other reasons related to our provision of the Services. We make these recommendations based on your contact list information as well as, with their consent, your contacts' information if they are also a Robinhood customer. We only access your contact list information with your explicit permission. If you provide us with personal data from your third-party contacts, it is your responsibility to ensure that the communication of such data to, and further processing by, Robinhood is lawful. For example, when you provide us with information about your contacts, we may use it to let you know which of your contacts have also signed up for our Services or, at your exclusive direction, send messages to your contacts regarding our Services. We will not send messages to your contacts that are not explicitly directed by you.
                    </li>
                <li class="list-group-item"><b>Additional Information</b> includes information that you submit via focus groups,
                    contests/sweepstakes, job applications, customer support, or other similar means. We may also collect any communications between Robinhood and you (including recording calls made to or by Robinhood) and any other information you provide to Robinhood.
                    </li>
            </ul>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
