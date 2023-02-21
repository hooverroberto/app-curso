<x-guest-layout>
<body class="font-mono bg-gray-400">
 <div class="container mt-5 mx-auto content-center">       
			<div class="flex h-screen justify-center items-center px-30 my-50" >
           
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex justify-items-center bg-white mt-5 rounded-l-lg rounded-r-lg mb-5" >
					<!-- Col -->
                   
					<div
						class="w-full bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg "
						style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
					></div>
					<!-- Col -->
                    <x-validation-errors class="mb-4" />
                    <div class="flex flex-col justify-center items-center mx-auto pt-5 mb-5">
                        <div>
                         <h2 class="mt-5 text-3xl font-black">Create an Account!</h2>  
                        </div>
                        
                        
                        <div>
                            
                        <form method="POST" action="{{ route('register') }}" class="mt-10">
                            @csrf

                            <div>
                                <x-label for="name" value="{{ __('Name') }}" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox name="terms" id="terms" required />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-center mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                
                            </div>
                            <div class="flex mx-auto justify-center mt-5 mb-6">
                            <x-button>
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
                
 
    </div>
 </body>
</x-guest-layout>
