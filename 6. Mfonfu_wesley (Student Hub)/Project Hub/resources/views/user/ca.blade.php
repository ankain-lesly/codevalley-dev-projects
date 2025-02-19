<x-app>
    <x-header/>
    <div style=" display:flex; justify-content:center; align-items:center; flex-direction:column;">
        <h1>
            Download your CAs here
        </h1>

        @foreach($files as $file)

        <div class="card" style="width: 18rem; margin-top: 30px; padding:5px;">
            <div class="card-body">
                <p class="card-text">
                    {{basename($file)}}
                </p>
                <a href="<?= "https://" . env("AWS_BUCKET") . ".s3." . env("AWS_DEFAULT_REGION") . ".amazonaws.com/" . str_replace(' ', '+', $file) ?>" class="btn btn-primary">Download</a>
            </div>
        </div>
        @endforeach
    </div>
</x-app>