<div class="relative w-full py-4 overflow-hidden">
    <div class="partner-slider-mask">
        <div class="flex animate-slide space-x-8 w-max">
            @foreach($logos as $logo)
                <div class="flex-shrink-0">
                    <img src="{{ $logo }}" alt="Partenaire" class="h-6 w-auto object-contain grayscale hover:grayscale-0 transition duration-300" />
                </div>
            @endforeach

            {{-- duplication pour boucle infinie --}}
            @foreach($logos as $logo)
                <div class="flex-shrink-0">
                    <img src="{{ $logo }}" alt="Partenaire" class="h-6 w-auto object-contain grayscale hover:grayscale-0 transition duration-300" />
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
@keyframes slide {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.animate-slide {
    animation: slide 30s linear infinite;
}

.partner-slider-mask {
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
}
</style>
