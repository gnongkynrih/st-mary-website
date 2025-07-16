<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-pink-100 to-purple-200 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
        <h2 class="mb-6 text-center text-2xl font-bold text-gray-900">Forgot Password</h2>
        <form wire:submit.prevent="sendResetLink" class="space-y-6">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email" required wire:model.defer="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your email">
                @error('email')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit"
                class="w-full flex justify-center py-2.5 px-5 text-sm font-medium rounded-lg text-white bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-pink-300 transition items-center">
                Send Password Reset Link
            </button>
        </form>
        @if (session()->has('status'))
            <div class="mt-4 text-green-600 text-center">{{ session('status') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="mt-4 text-red-600 text-center">{{ session('error') }}</div>
        @endif
        <div class="mt-6 text-center">
            <a href="/login" class="text-pink-600 hover:underline">Back to Login</a>
        </div>
    </div>
</div>
