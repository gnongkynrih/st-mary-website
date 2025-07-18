<div class="min-h-screen bg-gray-900">
    <div class="text-center">
<h1 class="pt-10 text-lg md:text-4xl text-center text-white">
        Contact Us
    </h1>
    <hr class="mt-4 rounded-lg w-1/4 mx-auto border-6 border-white"/>
    </div>
    <div class="flex px-10 gap-8 mt-10">
        <div class="w-1/2 bg-white h-[80vh]">
            <iframe 
            class="w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.0316886545224!2d91.88884327539408!3d25.570612477472526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37507ebd75b3b479%3A0x58de5e2abf990c0f!2sSaint%20Mary&#39;s%20College!5e0!3m2!1sen!2sin!4v1752810577043!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="w-1/2 bg-yellow-400 p-8 rounded shadow">
            <form class="pt-10 wire:submit.prevent="submit">
                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                    <input wire:model="name" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email address</label>
                    <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required />
                </div> 
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
                    <textarea wire:model="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="text-white bg-black hover:bg-black/80 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Send Message</button>
                </div>

                @if (session()->has('success'))
                    <div class="mt-4 text-green-600">{{ session('success') }}</div>
                @endif
            </form>
        </div>
    </div>
</div>
