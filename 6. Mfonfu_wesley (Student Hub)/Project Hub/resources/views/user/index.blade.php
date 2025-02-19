<x-app>
<x-header/>

<h1>
    Thank you for logging in, {{Auth::user()->name}}
</h1>
<h3 class="p-5">
    Let's get started
</h3>

<p class="p-5">
    Welcome, {{Auth::user()->name}}! We are thrilled to have you join us on this exciting learning journey. As you step into this new chapter, knoow that you are part of a supportive and inspiring community that values curiosity, growth and achievement. We believe in your potential and are here to guide you every step of the way. Embrace challenges, ask questions, and make the most of every opportunity to learn and grow. Your journey starts now, and we can't wait to see all the amazing things you will accomplish. Welcome aboard--we are so happy to have you with us!
</p>

</x-app>