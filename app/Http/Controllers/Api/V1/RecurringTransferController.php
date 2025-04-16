<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\RecurringTransferRequest;

class RecurringTransferController
{
    public function index()
    {
        $user = auth()->user()->load(['recurringTransfer']);
        $recurringTransfers = $user->recurringTransfer;

        return view('recurring-transfer/recurring-transfer', compact('recurringTransfers'));
    }

    public function add()
    {
        return view('recurring-transfer/add-recurring-transfer');
    }

    public function create(RecurringTransferRequest $request)
    {
        try {
            $user = auth()->user();
            $user->recurringTransfer()->create($request->toArray());

            return redirect()->to('recurring-transfer')
                ->with('recurring-transfer-status', 'success-created');
        } catch (\Exception $exception) {
            return redirect()->back()->with('recurring-transfer-status', 'error');
        }
    }

    public function delete(int $id)
    {
        $user = auth()->user()->load(['recurringTransfer']);

        foreach ($user->recurringTransfer as $recurringTransfer) {
            if ($recurringTransfer->id === $id) {
                $recurringTransfer->delete();
            }
        }

        return redirect()->to('recurring-transfer')
            ->with('recurring-transfer-status', 'success-deleted');
    }
}
