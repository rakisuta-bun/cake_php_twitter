<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Tweet;
use App\Model\Entity\User;
use App\Model\Table\TweetsTable;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;
use Twig\Profiler\Profile;

class DashBoardController extends AppController
{
    public function index()
    {
        /** @var User $user */
        $user = $this->Authentication->getIdentity();
        /** @var TweetsTable $tweetsTable */
        $tweetsTable = TableRegistry::getTableLocator()->get('Tweets');
        /** @var Profile $profile */

        if (
            $this->request->is('POST')
        ) {
            $body = $this->request->getData('body');
            $tweet = new Tweet();
            $tweet->body = $body;
            $tweet->user_id = $user->id;
            $tweetsTable->save($tweet);
        }

        $tweets = $this->paginate(
            $tweetsTable->query()->order(['Tweets.id' => 'DESC'])
                ->contain('Users')
                ->where(['user_id' => $user->id])
        );
        $this->set(['tweets' => $tweets]);
        $this->set(['user' => $user]);
    }
}
