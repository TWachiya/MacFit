<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
     public function createSubscription(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|int|exists:users,id',
            'bundle_id' => 'required|int|exists:bundles,id',
        ]);

        $subscription = new Subscription();
        $subscription->name = $validated['user_id'];
        $subscription->description = $validated['bundle_id'];

        try {
            $subscription->save();
            return response()->json($subscription);
        } 
        catch (\Exception $exception) {
            return response()->json([
                'error' => 'Failed to Save Subscription',
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function readAllSubscriptions()
    {
        try {
            $subscriptions = Subscription::all();
            return response()->json($subscriptions);
        } catch (\Exception $exception) {
            return response()->json([
                'error' => 'Failed to fetch Subscriptions.',
                'message' => $exception->getMessage()
            ]);
        }
    }
    public function readSubscription($id)
    {
        try {
            $subscription = Subscription::findOrFail($id);
            return response()->json($subscription);
        } catch (\Exception $exception) {
            return response()->json([
                'error' => 'Failed to fetch the Subscription.',
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function updateSubscription(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|int|exists:users,id',
            'bundle_id' => 'required|int|exists:bundles,id',
        ]);

        try {
            $existingSubscription = Subscription::findOrFail($id);

            $existingSubscription->user_id = $validated['user_id'];
            $existingSubscription->bundle_id = $validated['bundle_id'];
            $existingSubscription->save();
            return response()->json($existingSubscription);
        } catch (\Exception $exception) {
            return response()->json([
                'error' => 'Failed to Save Subscription.',
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function deleteSubscription($id)
    {
        try {
            $subscription = Subscription::findOrFail($id);
            $subscription->delete();

            return response("Subscription deleted successfully");
        } catch (\Exception $exception) {
            return response()->json([
                'error' => 'Failed to delete subscription.',
                'message' => $exception->getMessage()
            ]);
        }
    }
}
