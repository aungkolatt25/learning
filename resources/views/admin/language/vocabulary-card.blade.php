<div class="flex items-center justify-center">
    <div class="flex flex-col basis-2/6 text-center">

        <span>{{ $count . '/' . $total }}</span>
        <div class="border-2 h-96  relative w-full transition-all [transform-style:preserve-3d] group duration-500"
            id="voccard">

            <div class="flex flex-col grow absolute w-full h-full bg-white p-2">
                <div class="flex z-10">
                    <span class="underline hover:no-underline cursor-pointer"
                        onclick="document.getElementById('voccard').style.transform='rotateY(180deg)'">မသိဘူး</span>
                    <a href="{{ route('admin.vocabulary.process', [
                        'language' => $language->id,
                        'vocabulary' => $vocabulary->id,
                        'known' => '1',
                        'display' => 'card',
                    ]) }}"
                        class="ms-auto underline hover:no-underline cursor-pointer">သိတယ်</a>
                </div>
                <div class="absolute w-full h-full flex text-5xl grow items-center justify-center">
                    {{ $vocabulary->vocab }}</div>
            </div>
            <div
                class="flex flex-col grow [backface-visibility:hidden] absolute w-full h-full bg-white p-2 [transform:rotateY(180deg)] z-20">
                <div class="flex z-10">
                    <a href="{{ route('admin.vocabulary.process', [
                        'language' => $language->id,
                        'vocabulary' => $vocabulary->id,
                        'display' => 'card',
                    ]) }}"
                        class="underline hover:no-underline cursor-pointer">
                        သိပြီ
                    </a>
                </div>
                <div class="absolute w-full h-full flex text-5xl grow items-center justify-center">
                    <span class="text-5xl">
                        {{ $vocabulary->meaning }}
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>
