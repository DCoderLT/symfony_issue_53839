<?php declare(strict_types=1);

namespace App\Command;

use App\Service\TagUsingService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('bug:tag')]
class SampleCommand extends Command
{
    public function __construct(
        private readonly TagUsingService $service,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(sprintf('<info>%d tagged services</info>', $this->service->getTaggedCount()));

        return 0;
    }
}
